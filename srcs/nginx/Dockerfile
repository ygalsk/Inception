FROM debian:bookworm

# Install necessary packages for Nginx and OpenSSL
RUN apt update && apt upgrade -y && apt install -y nginx openssl

# Create SSL certificate and key (self-signed for simplicity)
RUN mkdir -p /etc/nginx/ssl && \
    openssl genpkey -algorithm RSA -out /etc/nginx/ssl/certificate.key && \
    openssl req -new -key /etc/nginx/ssl/certificate.key -out /etc/nginx/ssl/certificate.csr -subj "/C=US/ST=State/L=City/O=Organization/CN=yourdomain.com" && \
    openssl x509 -req -in /etc/nginx/ssl/certificate.csr -signkey /etc/nginx/ssl/certificate.key -out /etc/nginx/ssl/certificate.crt && \
    rm /etc/nginx/ssl/certificate.csr  # Clean up the CSR

# Copy your custom Nginx configuration file to the correct location
COPY default /etc/nginx/sites-available/default

# Expose port 443 for HTTPS traffic
EXPOSE 443

# Start Nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]
