# Ứng Dụng Thương Mại Điện Tử

Ứng dụng thương mại điện tử tối giản được xây dựng bằng **Laravel 11** và **Livewire 3** theo bộ công nghệ TALL (Tailwind CSS, Livewire). Dự án cung cấp giao diện thân thiện cho người dùng và hệ thống quản trị cho admin, bao gồm các chức năng cơ bản như xem sản phẩm, tìm kiếm, giỏ hàng, đặt hàng và quản lý sản phẩm, danh mục, đơn hàng.

---

## 1. Giới Thiệu

**👨‍💻 Minh Hien** 

- **Mục tiêu:**  
  Xây dựng một ứng dụng thương mại điện tử tối giản, giúp người dùng dễ dàng tìm kiếm, xem chi tiết sản phẩm, thêm vào giỏ hàng và đặt hàng, đồng thời cho admin quản lý sản phẩm, danh mục và đơn hàng.

- **Phạm vi:**  
  - **Người dùng:** Truy cập trang chủ, xem danh sách sản phẩm, chi tiết sản phẩm, tìm kiếm sản phẩm theo từ khóa, sử dụng giỏ hàng và đặt hàng (đang phát triển).  
  - **Quản trị viên:** Quản lý sản phẩm (CRUD), danh mục sản phẩm (CRUD) và đơn hàng thông qua dashboard admin.

---

## 2. Tính Năng Chính

- **Trang Chủ:** Giới thiệu ứng dụng.
- **Danh Sách & Chi Tiết Sản Phẩm:** Hiển thị danh sách sản phẩm và cho phép xem chi tiết từng sản phẩm.
- **Tìm Kiếm Sản Phẩm:** Cho phép tìm kiếm sản phẩm theo từ khóa ngay lập tức nhờ tính năng reactivity của Livewire.
- **Giỏ Hàng & Đặt Hàng:** Cho phép người dùng thêm sản phẩm vào giỏ, cập nhật và đặt hàng (đang phát triển).
- **Xác Thực Người Dùng:** Đăng ký, đăng nhập và quản lý tài khoản (sử dụng DevDojo Auth).
- **Quản Lý Admin:** Dashboard quản trị để quản lý sản phẩm, danh mục và đơn hàng.

---

## 3. Kiến Trúc Ứng Dụng

### 3.1. Sơ Đồ Cấu Trúc/Chức Năng

*Hình ảnh minh họa sơ đồ cấu trúc và chức năng của ứng dụng:*

![Cấu trúc chức năng](./public/images/bc/cn.png)

![Sơ đồ chi tiết chức năng](./public/images/bc/sdct.png)

---

## 4. Sơ Đồ Thuật Toán/Sơ Đồ Tuần Tự

### 4.1. Sơ Đồ Tuần Tự Xác Thực Người Dùng

![Xác thực người dùng](./public/images/bc/auth.png)

### 4.2. Sơ Đồ Tuần Tự Quản Lý Sản Phẩm (Admin CRUD)

![Quản lý sản phẩm](./public/images/bc/crudadmin.png)

### 4.3. Sơ Đồ Tuần Tự Quản Lý Danh Mục Sản Phẩm (Admin CRUD)

![Quản lý danh mục](./public/images/bc/category.png)

### 4.4. Sơ Đồ Tuần Tự Tìm Kiếm Sản Phẩm

![Tìm kiếm sản phẩm](./public/images/bc/productdetail.png)

### 4.5. Sơ Đồ Tuần Tự Xem Chi Tiết Sản Phẩm

![Xem chi tiết sản phẩm](./public/images/bc/card.png)

### 4.6. Sơ Đồ Tuần Tự Thêm Sản Phẩm Vào Giỏ Hàng

![Thêm sản phẩm vào giỏ hàng](./public/images/bc/card.png)

---

## 5. Công Nghệ Sử Dụng

- **Laravel 11:** Framework PHP mạnh mẽ cho phát triển ứng dụng web.
- **Livewire 3:** Framework giúp xây dựng giao diện động mà không cần viết nhiều JavaScript.
- **Tailwind CSS:** Framework CSS tiện ích, giúp xây dựng giao diện responsive và hiện đại.
- **DevDojo Auth Package:** Gói xác thực hỗ trợ đăng nhập, đăng ký và quản lý người dùng.

---

## 6. Quá Trình Triển Khai

1. **Thiết lập môi trường phát triển:**  
   Cài đặt Laravel, cấu hình Livewire và Tailwind CSS.

2. **Cài đặt và cấu hình các gói phụ thuộc:**  
   Sử dụng Composer và NPM để cài đặt các package cần thiết.

3. **Xây dựng giao diện và logic nghiệp vụ:**  
   Phát triển các component Livewire, controllers, models và views.

4. **Build và triển khai ứng dụng:**  
   - Sử dụng `npm run build` để tối ưu asset.  
   - Chạy migration với `php artisan migrate`.  
   - Khởi động ứng dụng bằng `php artisan serve`.
---
   - [Link website](https://trangthuongmaidientularavel-production.up.railway.app) : https://trangthuongmaidientularavel-production.up.railway.app
   - [Link repo](https://github.com/jimm9Tran/TrangThuongMaiDienTu_Laravel) : https://github.com/jimm9Tran/TrangThuongMaiDienTu_Laravel
---

*Tài khoản mật  khẩu cho admin: admin@gmail.com admin12345 khi truy cập https://trangthuongmaidientularavel-production.up.railway.app/admin/dashboard




