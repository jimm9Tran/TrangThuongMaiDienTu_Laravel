# Sử dụng base image với PHP
FROM mcr.microsoft.com/vscode/devcontainers/php:8.3

# Cài đặt Composer phiên bản 2.8.4
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cài đặt các gói bổ sung nếu cần
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*
