-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 04:51 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban_hang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `dia_chi` mediumtext NOT NULL,
  `dien_thoai` varchar(256) NOT NULL,
  `noi_dung` mediumtext NOT NULL,
  `hang_duoc_mua` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`) VALUES
(2, 'Phan anh vui', 'vui@gmail.com', '435 âu cơ, hòa khánh bắc, quận liên chiểu,đà nẵng.', '0905692314', 'Mua áo len cardigan tron', '58[|||]0[|||||]60[|||]1[|||||]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`) VALUES
(1, 'Quần ngố'),
(2, 'Áo sơ mi nam'),
(3, 'Áo Vest body'),
(4, 'Quần Vải'),
(5, 'Quần Jeans'),
(6, 'Quần Kaki'),
(7, 'Áo Phông Nam'),
(8, 'Quần Lót Nam'),
(11, 'Phụ kiện'),
(12, 'Giày ,dép nam'),
(13, 'Ví Nam'),
(14, 'Áo Khoác'),
(15, 'Áo thun,áo len');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `vi_tri` varchar(255) DEFAULT NULL,
  `html` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `vi_tri`, `html`) VALUES
(1, 'trai', '<div>Gà con lái xe</div>'),
(2, 'phai', '<div>Quảng cáo bên phải</div>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) NOT NULL,
  `noi_dung` mediumtext NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) NOT NULL,
  `trang_chu` varchar(256) NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(45, 'quần short', 120000, 'sp2.jpg', ' Quần đẹp lắm mua đi', 1, '', 'co', 3),
(46, 'Sơ mi trắng', 100000, 'sp3.jpg', 'Áo đẹp lắm\r\n', 2, 'co', 'co', 4),
(47, 'Áo vest nam Hàn Quốc', 750000, 'sp4.jpg', 'Áo vest nam Hàn Quốc đẹp lắm', 3, 'co', 'co', 5),
(48, 'quần Âu nam Hàn Quốc', 250000, 'sp5.jpg', 'Quần Âu nam đẹp lắm mua đi', 4, '', 'co', 6),
(49, 'quần jeans trất', 290000, 'sp6.jpg', 'Quần này mặc là đi tán gái auto đổ', 5, '', 'co', 7),
(50, 'Áo phông trất sky', 120000, 'sp7.jpg', 'Áo phông dành cho fan của Tùng Núi', 7, 'co', '', 8),
(51, 'cavat lịch lãm', 87000, 'sp8.JPG', 'Cà vạt dành cho những quý ông', 11, 'co', '', 9),
(52, 'thắt lưng lịch lãm', 100000, 'sp9.jpg', 'Thắt lưng đẹp lắm thề', 11, 'co', 'co', 10),
(53, 'Giầy da công sở', 300000, 'sp10.JPG', 'Giày da dành cho ai thích đi giày da mà không thích đi giày vài', 12, '', '', 11),
(54, 'Ví da phái mạnh', 300000, 'sp11.JPG', 'Ví da phái mạnh tức là nó không yếu', 13, '', 'co', 12),
(56, 'Áo Sơ Mi Sọc', 1500002, 'so-mi-1.jpg', 'Áo thì thật nhưng ảnh minh họa lại là lấy trên mạng. Qua shop để mặc nhé', 2, '', 'co', 14),
(57, 'Áo Sơ Mi Cộc Tay', 30000, 'so-mi-2.jpg', 'Áo sơ mi cộc tay cho người không thích mặc áo dài tay', 2, '', 'co', 15),
(58, 'Áo sơ mi kẻ tay', 30000, 'so-mi-3.jpg', 'Áo sơ mi kẻ tay dành cho ai không thích áo sơ mi kẻ chân', 2, '', 'co', 16),
(59, 'Áo Khoác nam Mangto', 45000, 'ao-khoac-1.png', 'Áo khác nam làm từ măng và cho vào tô', 14, '', '', 17),
(60, 'Kính râm nam thời thượng', 25000, '8330af73095223d766aeb8da277d5f13.jpg', 'Kính rayban thời thượng của ABCXYZ giúp cho bạn bảo vệ mắt mỗi khi trời nắng, chắn gió chắn bụi hiệu quả', 11, '', 'co', 18),
(61, 'Kính mắt Unisex phi công thời trang Ray-Ban', 2500000, '23.jpg', 'Với thiết kế sang trọng, đường nét tinh tế và không thiếu sự mạnh mẽ, trẻ trung, Kính mắt Unisex phi công thời trang Ray-Ban của ABCXYZ hứa hẹn mang đến cho bạn vẻ ngoài hấp dẫn, cuốn hút và đầy tự tin. Sản phẩm dành cho cả nam và nữ.', 11, 'co', 'co', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) NOT NULL,
  `lien_ket` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'qc1.png', '#'),
(2, 'qc2.jpg', '#'),
(3, 'a_3.png', '#'),
(4, 'a_4.png', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `ky_danh` varchar(256) NOT NULL,
  `mat_khau` varchar(256) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`, `email`) VALUES
(1, 'admin', '123456789', 'thanh87803@st.vimaru.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tennsd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `tennsd`, `email`) VALUES
(1, 'admin', '123', 'Quan Tri Vien', 'admin@gmail.com'),
(2, 'khach', '12345', 'Nam', 'abc@gmail.com'),
(3, 'khach', '46f40a88', 'Nam', 'thanh87803@st.vimaru.edu.vn'),
(4, 'thien', 'c567c72a', 'Thiên', 'anh86089@st.vimaru.edu.vn'),
(5, 'tùng', 'd6fa44f5', 'Tùng', 'tung87916@st.vimaru.edu.vn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
