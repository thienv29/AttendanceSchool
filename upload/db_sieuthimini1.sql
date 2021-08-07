-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2021 lúc 03:34 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_sieuthimini1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiethoadon`
--

CREATE TABLE `tbl_chitiethoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `tongtien_loaisanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitiethoadon`
--

INSERT INTO `tbl_chitiethoadon` (`id_hoadon`, `id_sanpham`, `soluong`, `gia`, `tongtien_loaisanpham`) VALUES
(1, 3007, 1, 2000, 2000),
(1, 3009, 1, 55000, 55000),
(1, 3012, 4, 8000, 8000),
(2, 3009, 1, 55000, 55000),
(2, 3011, 1, 27500, 27500),
(2, 3012, 1, 8000, 8000),
(2, 3010, 1, 2000, 2000),
(2, 3006, 1, 55000, 55000),
(3, 3012, 1, 8000, 8000),
(3, 3010, 1, 2000, 2000),
(3, 3012, 1, 8000, 8000),
(3, 3010, 1, 2000, 2000),
(5, 3010, 1, 2000, 2000),
(5, 3011, 1, 27500, 27500),
(5, 3009, 1, 55000, 55000),
(6, 3008, 1, 10000, 10000),
(6, 3011, 1, 27500, 27500),
(6, 3009, 1, 55000, 55000),
(7, 3011, 1, 27500, 27500),
(7, 3013, 1, 8000, 8000),
(7, 3008, 1, 10000, 10000),
(7, 3010, 1, 2000, 2000),
(8, 3008, 1, 10000, 10000),
(8, 3011, 1, 27500, 27500),
(8, 3010, 8, 2000, 2000),
(9, 3011, 1, 27500, 27500),
(9, 3012, 1, 8000, 8000),
(9, 3013, 1, 8000, 8000),
(9, 3007, 1, 2000, 2000),
(10, 3011, 1, 27500, 27500),
(10, 3012, 7, 8000, 8000),
(10, 3008, 1, 10000, 10000),
(11, 3009, 1, 55000, 55000),
(11, 3010, 1, 2000, 2000),
(11, 3011, 1, 27500, 27500),
(11, 3006, 9, 55000, 55000),
(12, 3010, 12, 2000, 2000),
(12, 3008, 1, 10000, 10000),
(13, 3011, 1, 27500, 27500),
(13, 3013, 1, 8000, 8000),
(13, 3009, 1, 55000, 55000),
(13, 3010, 3, 2000, 2000),
(14, 3011, 2, 27500, 27500),
(14, 3013, 1, 8000, 8000),
(14, 3006, 1, 55000, 55000),
(14, 3008, 1, 10000, 10000),
(14, 3014, 3, 8000, 8000),
(15, 3011, 1, 27500, 27500),
(15, 3010, 6, 2000, 2000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietkhuyenmai`
--

CREATE TABLE `tbl_chitietkhuyenmai` (
  `id_khuyenmai` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `phantram_km` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietphieunhaphang`
--

CREATE TABLE `tbl_chitietphieunhaphang` (
  `id_phieunhaphang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongnhap` int(11) NOT NULL,
  `dongianhap` double NOT NULL,
  `tongtien_pnh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitietphieunhaphang`
--

INSERT INTO `tbl_chitietphieunhaphang` (`id_phieunhaphang`, `id_sanpham`, `soluongnhap`, `dongianhap`, `tongtien_pnh`) VALUES
(201, 3010, 92, 2000, 184000),
(202, 3010, 615, 2000, 1230000),
(202, 3016, 492, 6000, 2952000),
(203, 3017, 200, 6000, 1200000),
(204, 3011, 2345, 27500, 64487500),
(205, 3013, 234, 8000, 1872000),
(206, 3008, 132, 10000, 1320000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangnhap`
--

CREATE TABLE `tbl_dangnhap` (
  `id_nhanvien` int(11) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `tendangnhap` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangnhap`
--

INSERT INTO `tbl_dangnhap` (`id_nhanvien`, `matkhau`, `tendangnhap`) VALUES
(4001, 'admin', 'admin'),
(4009, 'nhanvien', 'nhanvien'),
(4022, 'kha', 'kha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `id_hoadon` int(20) NOT NULL,
  `id_nhanvien` int(20) NOT NULL,
  `id_khachhang` int(20) NOT NULL,
  `id_khuyenmai` int(20) NOT NULL,
  `ngay_lap` date NOT NULL,
  `tong_hoadon` int(11) NOT NULL,
  `giolap_hoadon` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`id_hoadon`, `id_nhanvien`, `id_khachhang`, `id_khuyenmai`, `ngay_lap`, `tong_hoadon`, `giolap_hoadon`) VALUES
(1, 4001, 260, 200, '2021-05-18', 80100, '13:30:36'),
(2, 4009, 261, 204, '2021-05-18', 59000, '15:08:15'),
(3, 4001, 262, 203, '2021-05-18', 5000, '15:45:56'),
(4, 4001, 262, 203, '2021-05-18', 5000, '15:46:54'),
(5, 4001, 263, 205, '2021-05-18', 84500, '15:52:05'),
(6, 4001, 264, 205, '2021-05-18', 92500, '15:56:14'),
(7, 4001, 265, 205, '2021-05-18', 47500, '15:57:58'),
(8, 4001, 266, 205, '2021-05-18', 53500, '15:58:59'),
(9, 4001, 267, 205, '2021-05-18', 45500, '16:04:09'),
(10, 4001, 268, 205, '2021-05-18', 93500, '16:09:00'),
(11, 4001, 269, 205, '2021-05-18', 579500, '16:14:04'),
(12, 4001, 270, 205, '2021-05-18', 34000, '16:17:34'),
(13, 4001, 271, 205, '2021-05-18', 96500, '16:22:27'),
(14, 4001, 272, 205, '2021-05-18', 152000, '16:25:42'),
(15, 4001, 273, 205, '2021-05-18', 39500, '16:38:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `ten_kh` varchar(50) DEFAULT NULL,
  `ho_kh` varchar(50) DEFAULT NULL,
  `diachi_kh` varchar(50) DEFAULT NULL,
  `sdt_kh` varchar(11) DEFAULT NULL,
  `email_kh` varchar(50) DEFAULT NULL,
  `gioitinh` varchar(11) DEFAULT NULL,
  `tuoi_kh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id_khachhang`, `ten_kh`, `ho_kh`, `diachi_kh`, `sdt_kh`, `email_kh`, `gioitinh`, `tuoi_kh`) VALUES
(202, 'Thien', 'Nữ', 'TPHCM', '2147483647', 'thienv29@gmail.com', 'Nam', 12),
(203, 'Phúc', 'Nam', 'tp HCM', '523923164', 'htun@gmail.com', 'Nam', 45),
(204, 'Thiện', 'Vũ', 'TPHCm', '123456789', 'phucxo@gmail.com', 'Nam', 32),
(205, 'Vinh', 'Nguyễn', 'cầu giấy hà nội', '945258987', 'thiencasd@gmail.com', 'Nam', 30),
(260, 'Thuan', 'Ho', 'HCM', '039623982', 'Thuan@gmail.com', 'Nam', 23),
(261, 'Phú', 'Trần ', 'quận 12 TP.HCM', '364581269', 'thien@gmial.com', 'Nam', 25),
(262, 'Thùy Dương', 'Trần ', 'HCM', '389955412', 'dương22@gmail.com', 'Nam', 25),
(263, 'Lê Quốc', 'Huỳnh ', 'HCM', '125489541', 'quoc@gmail.com', 'Nam', 20),
(264, 'Ngọc Báu', 'Nguyễn ', 'HCM', '2251351', 'bau252@gmail.com', 'Nam', 22),
(265, 'Thị Phương', 'Lê', 'HCM', '979792406', 'phuong245@gmail.com', 'Nữ', 23),
(266, 'Lê Tố Hân', 'Huỳnh', 'Hải phòng', '1666999066', 'han0099@gmail.com', 'Nữ', 28),
(267, 'Hân', 'Nguyễn Bảo', 'Hà Nội', '2251351', 'han@gmail.com', 'Nữ', 40),
(268, 'Nhân', 'Lê ', 'HCM', '154265487', 'nhan2626@gmail.com', 'Nam', 26),
(269, 'Huân', 'Võ Minh', 'HCM', '345894521', 'huan124@gmail.com', 'Nam', 24),
(270, 'Kiên', 'Trần ', 'HCM', '381245698', 'kien1122@gmail.com', 'Nam', 21),
(271, 'Thị Huyền', 'Nguyễn ', 'Cà mau', '384568721', 'huyenthi@gmail.com', 'Nữ', 20),
(272, 'Lệ', 'Trần Mỹ', 'Tiền giang', '384526987', 'myle@gmail.com', 'Nữ', 22),
(273, 'Linh', 'Hồ Huệ', 'Đà nẵng', '3845611287', 'linhnguyen@gmail.com', 'Nữ', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyenmai`
--

CREATE TABLE `tbl_khuyenmai` (
  `id_khuyenmai` int(11) NOT NULL,
  `ngaybd_km` date NOT NULL,
  `ngaykt_km` date NOT NULL,
  `noidung_km` varchar(50) NOT NULL,
  `ten_km` varchar(100) NOT NULL,
  `phantram_km` int(11) NOT NULL,
  `dieukien_km` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khuyenmai`
--

INSERT INTO `tbl_khuyenmai` (`id_khuyenmai`, `ngaybd_km`, `ngaykt_km`, `noidung_km`, `ten_km`, `phantram_km`, `dieukien_km`) VALUES
(200, '2021-05-02', '2022-03-02', '', '', 10, 500000),
(201, '2021-02-09', '2021-05-01', '', '', 20, 1000000),
(203, '2021-05-06', '2021-05-31', '', '', 50, 2000000),
(204, '2021-05-14', '2021-05-31', '', '', 60, 3000000),
(205, '2021-01-12', '2028-04-13', '', '', 0, 0),
(206, '2021-05-09', '2021-05-28', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `id_loaisanpham` int(11) NOT NULL,
  `ten_lsp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`id_loaisanpham`, `ten_lsp`) VALUES
(208, 'kl'),
(213, 'Đông lạnh'),
(214, 'Bánh kẹo'),
(215, 'Đồ uống'),
(216, 'Thức ăn nhanh'),
(217, 'Đồ hộp'),
(218, 'Gia v'),
(219, 'Đã sơ chế'),
(220, 'Thực phẩm khô'),
(221, 'Văn phòng phẩm'),
(222, 'Mẹ và bé'),
(223, 'Gia dụng'),
(224, 'Mỹ phẩm'),
(225, 'Hóa phẩm'),
(226, 'Đồ cùng cá nhân'),
(227, 'Lương thực'),
(228, 'Sữa'),
(229, 'takfr');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhacungcap`
--

CREATE TABLE `tbl_nhacungcap` (
  `id_nhacungcap` int(11) NOT NULL,
  `ten_ncc` varchar(50) NOT NULL,
  `diachi_ncc` varchar(500) NOT NULL,
  `sdt_ncc` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhacungcap`
--

INSERT INTO `tbl_nhacungcap` (`id_nhacungcap`, `ten_ncc`, `diachi_ncc`, `sdt_ncc`) VALUES
(100, 'Thiên Long', 'Số 7 Đường T4B, Tây Thạnh, Tân Phú, Thành phố Hồ Chí Minh', '1324578'),
(102, 'Vinamilk', 'Số 10 Tân Trào - Phường Tân Phú - Quận 7 - TP. Hồ Chí Minh', '1235654'),
(106, 'ádcfv', 'thien', '13256'),
(107, 'ádcfv', 'thien', '0523923764'),
(108, 'Vinamilk', 'thnssa', '056231458');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `id_nhanvien` int(11) NOT NULL,
  `ten_nv` varchar(50) NOT NULL,
  `ho_nv` varchar(50) NOT NULL,
  `diachi_nv` varchar(50) NOT NULL,
  `sdt_nv` varchar(11) NOT NULL,
  `tuoi_nv` int(11) NOT NULL,
  `chucvu_nv` varchar(50) NOT NULL,
  `luong_nv` int(11) NOT NULL,
  `gioitinh_nv` varchar(50) NOT NULL,
  `trangthai_nv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`id_nhanvien`, `ten_nv`, `ho_nv`, `diachi_nv`, `sdt_nv`, `tuoi_nv`, `chucvu_nv`, `luong_nv`, `gioitinh_nv`, `trangthai_nv`) VALUES
(4001, 'Thiệnn', 'Vũ Quý', 'TPHCM', '523923765', 20, 'Quản lý', 2000, 'Nam', 'Hiện hành'),
(4002, 'Thuận', 'Phạm Tấn', 'TPHCM', '948040243', 20, 'Quản lý', 2000, 'Nam', 'Hiện hành'),
(4003, 'Nghĩa', 'Trần Văn', 'TPHCM', '125558881', 20, 'Quản lý', 2000, 'Nam', 'Hiện hành'),
(4004, 'Quang', 'Nguyễn', 'TPHCM', '11231234', 20, 'Quản lý', 2000, 'Nam', 'Hiện hành'),
(4005, 'Kiệt', 'Trần ', 'TPHCM', '165321486', 20, 'Quản lý', 2000, 'Nam', 'Hiện hành'),
(4008, 'Linh', 'Khánh', 'Hà Nội', '779588956', 18, 'Quản lí', 200, 'Nam', 'Hiện hành'),
(4009, 'Lê', 'My', 'Tây Ninh', '913546900', 18, 'Nhân viên', 200, 'Nữ', 'đã nghỉ'),
(4022, 'Kha', 'Minh', 'Daklak', '561312486', 20, 'Nhân viên', 4000, 'Nam', 'Hiện hành'),
(4026, 'Hiền', 'Kim', '696969', '123549368', 69, 'Nhân viên', 10000, 'Nữ', 'Hiện hành'),
(4027, 'Thui Thủi', 'Nguyen Thui Thui Thùi', 'HCN', '378376922', 100, 'Quản lý', 100, 'Nam', 'Hiện hành'),
(4028, 'dsfg', 'qsadxfg', 'qasadfg', '113565698', 1515, 'Quản lí', 1234567, 'Nam', 'Hiện hành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phieunhaphang`
--

CREATE TABLE `tbl_phieunhaphang` (
  `id_phieunhaphang` int(11) NOT NULL,
  `id_nhanvien` int(11) NOT NULL,
  `id_nhacungcap` int(11) NOT NULL,
  `ngaynhap_pnh` date NOT NULL,
  `tongtien_pnh` int(11) NOT NULL,
  `giolap_pnh` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_phieunhaphang`
--

INSERT INTO `tbl_phieunhaphang` (`id_phieunhaphang`, `id_nhanvien`, `id_nhacungcap`, `ngaynhap_pnh`, `tongtien_pnh`, `giolap_pnh`) VALUES
(200, 4022, 100, '2021-05-10', 85000000, '09:43:19'),
(201, 4001, 106, '2021-05-18', 46000, '16:35:59'),
(202, 4001, 106, '2021-05-18', 1968000, '16:44:15'),
(203, 4001, 108, '2021-05-18', 1200000, '16:48:18'),
(204, 4001, 107, '2021-05-18', 64487500, '16:49:59'),
(205, 4001, 106, '2021-05-18', 1872000, '16:51:00'),
(206, 4001, 107, '2021-05-18', 1320000, '16:52:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `id_loaisanpham` int(11) NOT NULL,
  `dongia_sp` int(11) NOT NULL,
  `soluong_sp` int(11) NOT NULL,
  `donvitinh_sp` varchar(50) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `trangthai_sp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `id_loaisanpham`, `dongia_sp`, `soluong_sp`, `donvitinh_sp`, `ten_sp`, `trangthai_sp`) VALUES
(3000, 228, 24000, 30, 'Lốc', 'Sữa milo', 'Đang bán'),
(3001, 228, 21000, 40, 'Lốc', 'Sữa TH true milk', 'Đang bán'),
(3002, 228, 22000, 35, 'Lốc', 'Sữa Fami', 'Đang bán'),
(3003, 228, 22000, 20, 'Lốc', 'Sữa nestle', 'Đang bán'),
(3004, 228, 21000, 10, 'Lốc', 'Sữa Óc chó', 'Đang bán'),
(3005, 214, 10000, 10, 'Gói', 'Socola Kitkat', 'Đang bán'),
(3006, 214, 55000, 9, 'Hộp', 'Bánh Chocopie', 'Đang bán'),
(3007, 214, 2000, 49, 'Gói', 'Bánh gạo One One', 'Đang bán'),
(3008, 214, 10000, 135, 'Gói', 'Socola Kitkat', 'Đang bán'),
(3009, 214, 55000, 16, 'Hộp', 'Bánh Chocopie', 'Đang bán'),
(3010, 214, 2000, 720, 'Gói', 'Bánh gạo One One', 'Đang bán'),
(3011, 214, 27500, 2349, 'hộp', 'Bánh AFC', 'Đang bán'),
(3012, 214, 8000, 0, 'Gói', 'Banh OREO vị Vani', 'Đang bán'),
(3013, 214, 8000, 239, 'Gói', 'Bánh OREO vị Dâu', 'Đang bán'),
(3014, 214, 8000, 11, 'Gói', 'Bánh OREO vị Socola', 'Đang bán'),
(3015, 214, 6000, 6, 'Gói', 'Snack OiShi tôm cay', 'Đang bán'),
(3016, 214, 6000, 498, 'Gói', 'Snack OiShi Tomato', 'Đang bán'),
(3017, 214, 6000, 209, 'Gói', 'Snack OiShi Bí đỏ', 'Đang bán'),
(3018, 214, 6000, 1, 'Gói', 'Snack OiShi Phô mát ', 'Đang bán'),
(3019, 214, 6000, 3, 'Gói', 'Snack OiShi bắp', 'Đang bán'),
(3020, 214, 10000, 3, 'Gói', 'Socola Kitkat', 'Đang bán'),
(3021, 214, 55000, 10, 'Hộp', 'Bánh Chocopie', 'Đang bán'),
(3022, 214, 2000, 47, 'Gói', 'Bánh gạo One One', 'Đang bán'),
(3023, 214, 27500, 11, 'hộp', 'Bánh AFC', 'Đang bán'),
(3024, 214, 8000, 15, 'Gói', 'Banh OREO vị Vani', 'Đang bán'),
(3025, 214, 8000, 9, 'Gói', 'Bánh OREO vị Dâu', 'Đang bán'),
(3026, 214, 8000, 14, 'Gói', 'Bánh OREO vị Socola', 'Đang bán'),
(3027, 214, 6000, 10, 'Gói', 'Snack OiShi tôm cay', 'Đang bán'),
(3028, 214, 6000, 10, 'Gói', 'Snack OiShi Tomato', 'Đang bán'),
(3029, 214, 6000, 6, 'Gói', 'Snack OiShi Bí đỏ', 'Đang bán'),
(3030, 214, 6000, 10, 'Gói', 'Snack OiShi Phô mát ', 'Đang bán'),
(3031, 214, 6000, 10, 'Gói', 'Snack OiShi bắp', 'Đang bán'),
(3032, 214, 10000, 15, 'Gói', 'Snack Poca khoai tây tự nhiên', 'Đang bán'),
(3033, 214, 10000, 8, 'Gói', 'Snack Poca khoai tay vị sườn nướng', 'Đang bán'),
(3034, 214, 10000, 10, 'Gói', 'Snack Poca khoai tây vị rong biển', 'Đang bán'),
(3035, 214, 12000, 10, 'Gói', 'Snack Swing vị sườn', 'Đang bán'),
(3036, 214, 8000, 10, 'Gói', 'Snack Lays vị BBQ', 'Đang bán'),
(3037, 214, 20000, 10, 'Hộp', 'Doublemint viên', 'Đang bán'),
(3038, 214, 15000, 10, 'Hộp', 'Doublemint gum', 'Đang bán'),
(3039, 214, 5000, 9, 'Hộp', 'Kẹo kem dừa', 'Đang bán'),
(3040, 214, 25000, 10, 'Hộp', 'Bánh Nabati (hộp lớn)', 'Đang bán'),
(3041, 214, 3000, 10, 'Gói', 'Bánh Nabati (5 Thanh)', 'Đang bán'),
(3042, 214, 20000, 10, 'Gói', 'Kẹo Oshi vị ổi', 'Đang bán'),
(3043, 214, 20000, 10, 'Gói', 'Kẹo Oshi vị chanh', 'Đang bán'),
(3044, 214, 25000, 8, 'Gói', 'Kẹo Bạc hà FresBarley', 'Đang bán'),
(3045, 214, 30000, 10, 'Gói', 'Kẹo Bạc hà Socola', 'Đang bán'),
(3046, 228, 6000, 24, 'Hộp', 'Sữa chua Vinamilk', 'Đang bán'),
(3047, 228, 16000, 20, 'Hộp', 'Sữa chua Nếp cẩm', 'Đang bán'),
(3048, 228, 7000, 24, 'Hộp', 'Sữa chua TH true milk', 'Đang bán'),
(3049, 228, 6000, 24, 'Hộp', 'Sữa chua Lựu đỏ', 'Đang bán'),
(3050, 228, 7000, 24, 'Hộp', 'Sữa chua Nha Đam', 'Đang bán'),
(3051, 228, 6000, 24, 'Hộp', 'Sữa chua Dâu', 'Đang bán'),
(3052, 228, 7000, 32, 'Hộp', 'Sữa Yomost vị dâu', 'Đang bán'),
(3053, 228, 7000, 32, 'Hộp', 'Sữa Yomost vị việt quất', 'Đang bán'),
(3054, 228, 7000, 32, 'Hộp', 'Sữa Yomost vị cam', 'Đang bán'),
(3055, 228, 53000, 25, 'Chai', 'Sữa Yakult(400ml)', 'Đang bán'),
(3056, 228, 5000, 25, 'Chai', 'Sữa Yakult(65ml)', 'Đang bán'),
(3057, 228, 25000, 25, 'Lốc', 'Sữa Yakult(65mlx5', 'Đang bán'),
(3058, 228, 53000, 25, 'Chai', 'Sữa Betagen(400ml)', 'Đang bán'),
(3059, 228, 37000, 25, 'Chai', 'Sữa Betagen(300ml)', 'Đang bán'),
(3060, 228, 17000, 25, 'Chai', 'Sữa Betagen(140ml)', 'Đang bán'),
(3061, 228, 20000, 25, 'Hộp', 'Sữa Banana vị chuối', 'Đang bán'),
(3062, 228, 20000, 25, 'Hộp', 'Sữa Banana vị dâu', 'Đang bán'),
(3063, 228, 20000, 25, 'Hộp', 'Sữa Banana vị dưa lưới', 'Đang bán'),
(3064, 228, 6000, 24, 'Hộp', 'Sữa chưa Vinamilk', 'Đang bán'),
(3065, 218, 21000, 20, 'Gói', 'Đường trắng (1kg)', 'Đang bán'),
(3066, 218, 24000, 20, 'Gói', 'Đường vàng (1kg)', 'Đang bán'),
(3067, 218, 60000, 20, 'Hộp', 'Đường ăn kiêng (250g)', 'Đang bán'),
(3068, 218, 59000, 20, 'Hộp', 'Tiêu đen Phú Quốc (40g)', 'Đang bán'),
(3069, 218, 21000, 20, 'Chai', 'Dầu ăn Tường An (1L)', 'Đang bán'),
(3070, 218, 45000, 20, 'Gói', 'Dầu Olive (250ml)', 'Đang bán'),
(3071, 218, 12000, 20, 'Chai', 'Tương ớt Chinsu', 'Đang bán'),
(3072, 218, 12000, 20, 'Chai', 'Tương ớt Chinsu siêu cay', 'Đang bán'),
(3073, 218, 5000, 20, 'Gói', 'Ngũ vị hương', 'Đang bán'),
(3074, 218, 12000, 20, 'Gói', 'Tương cà Chisu', 'Đang bán'),
(3075, 218, 168000, 20, 'Gói', 'Nước mắm cá cơm(5L)', 'Đang bán'),
(3076, 218, 98000, 20, 'Gói', 'Nước mắm cốt Phú Quốc(520ML)', 'Đang bán'),
(3077, 218, 6000, 20, 'Gói', 'Muối (500g)·', 'Đang bán'),
(3078, 218, 12000, 20, 'Gói', 'Bột ngọt (150g)', 'Đang bán'),
(3079, 218, 168000, 20, 'Gói', 'Bột ngọt (500g)', 'Đang bán'),
(3080, 217, 32000, 10, 'Hộp', 'Thịt hộp Span ', 'Đang bán'),
(3081, 217, 18000, 10, 'Hộp', 'Cá ngừ sốt cay Tuna (140g)', 'Đang bán'),
(3082, 217, 162000, 18, 'Hộp', 'Thịt vai heo Extra Tulip hộp 454g', 'Đang bán'),
(3083, 217, 24000, 10, 'Hộp', 'Thịt heo hầm Master T hộp 180g', 'Đang bán'),
(3084, 217, 72000, 10, 'Hộp', 'Thịt bò hầm gia vị Vissan hộp 397g', 'Đang bán'),
(3085, 217, 39000, 10, 'Hộp', 'Bò nấu đậu trắng Vissan hộp 280g', 'Đang bán'),
(3086, 217, 12000, 10, 'Hộp', 'Cá nục sốt cà đậm đà 3 Cô Gái 155g', 'Đang bán'),
(3087, 215, 8000, 50, 'Chai', 'Pepsi (390ml)', 'Đang bán'),
(3088, 215, 8000, 56, 'Chai', 'Mirinda Xá xị (390ml)', 'Đang bán'),
(3089, 215, 8000, 60, 'Chai', 'Cocacola (390ml)', 'Đang bán'),
(3090, 215, 9000, 50, 'Chai', 'Revive (500ml)', 'Đang bán'),
(3091, 215, 9000, 60, 'Chai', 'Revive chanh muối (500ml)', 'Đang bán'),
(3092, 215, 9000, 55, 'Chai', 'Sprite (600ml)', 'Đang bán'),
(3093, 215, 9000, 60, 'Chai', 'Warrior vị nho (500ml)', 'Đang bán'),
(3094, 215, 9000, 60, 'Chai', '7Up (390ml)', 'Đang bán'),
(3095, 215, 10000, 60, 'Lon', 'Redbull (390ml)', 'Đang bán'),
(3096, 215, 7000, 60, 'Chai', 'Number1 (390ml)', 'Đang bán'),
(3097, 222, 350000, 15, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3098, 222, 430000, 15, 'Gói', 'Tã em bé (cỡ lớn)', 'Đang bán'),
(3099, 222, 180000, 15, 'Gói', 'Tã em bé (cỡ nhỏ)', 'Đang bán'),
(3100, 222, 205000, 20, 'Chai', 'Sữa tắm gội cho bé Cetaphil Bay ( 400ml )', 'Đang bán'),
(3101, 222, 45000, 20, 'tuýp', 'Kem đánh răng cho trẻ từ 1 tuổi Lion Strawbery', 'Đang bán'),
(3102, 222, 275000, 20, 'Hộp', 'Sữa bột em bé Similac Newborn Eye-Q ( 400g)', 'Đang bán'),
(3103, 222, 539000, 20, 'Hộp', 'Sữa bột em bé Similac Newborn Eye-Q ( 900g )', 'Đang bán'),
(3104, 222, 155000, 20, 'Hộp', 'Sữa bột Dielac Alpha 1 Gold( 400g)', 'Đang bán'),
(3105, 222, 205000, 20, 'Hộp', 'Sữa bột Dielac Alpha (900g)', 'Đang bán'),
(3106, 222, 85000, 10, 'Chai', 'Dầu gội em bé Không kích ứng Nuagé', 'Đang bán'),
(3107, 222, 125000, 10, 'Chai', 'Dầu gội cho bé Johnsons Baby', 'Đang bán'),
(3108, 222, 13000, 20, 'Cây', 'Bàn chải đánh răng cho trẻ em ', 'Đang bán'),
(3109, 222, 119000, 25, 'Gói', 'Bỉm tã dán quần YOULI cho bé ', 'Đang bán'),
(3110, 222, 165000, 15, 'Chai', 'Xịt vệ sinh răng Hamikea cho bé từ 28 tháng trở lê', 'Đang bán'),
(3111, 222, 4650000, 10, 'Cái', 'Balo bĩm sữa đa chức năng', 'Đang bán'),
(3112, 222, 199000, 20, 'Gói', 'Thau chậu tắm gấp gọn cho bé', 'Đang bán'),
(3113, 222, 150000, 10, 'Gói', 'Miếng lót thấm sữa ChuChu Baby ( lớn)', 'Đang bán'),
(3114, 222, 90000, 10, 'Gói', 'Miếng lót thấm sữa ChuChu Baby ( vừa )', 'Đang bán'),
(3115, 222, 79000, 10, 'Gói', 'Miếng lót thấm sữa ChuChu Baby ( nhỏ)', 'Đang bán'),
(3116, 222, 170000, 10, 'can', 'Nước giặt quần áo cho bé D-Nee (3 lít)', 'Đang bán'),
(3117, 222, 50000, 10, 'Túi', 'Nước giặt quần áo cho bé D-Nee(600g)', 'Đang bán'),
(3118, 222, 68000, 10, 'Chai', 'Nước rửa bình sữa D-Nee', 'Đang bán'),
(3119, 222, 39000, 15, 'hộp', 'Gạc rơ lưỡi trẻ em Hanomed', 'Đang bán'),
(3120, 222, 300000, 10, 'Máy', 'Máy hâm sữa Fatz Baby', 'Đang bán'),
(3121, 222, 235000, 10, 'Hộp', ' Sữa Enfamama A+ hương chocolate', 'Đang bán'),
(3122, 222, 235000, 20, 'Hộp', 'Sữa Enfamama A+ hương vani', 'Đang bán'),
(3123, 222, 439000, 20, 'Hộp', 'Sữa bầu Similac Mom hương vani 900g', 'Đang bán'),
(3124, 222, 185000, 20, 'Hộp', 'Sữa bầu Similac Mom hương vani 400g', 'Đang bán'),
(3125, 222, 230000, 10, 'Đai', 'Đai hổ trợ bụng bầu ( đủ size', 'Đang bán'),
(3126, 222, 420000, 15, 'Tuýp', 'Kem chống rạn da ', 'Đang bán'),
(3127, 222, 459000, 20, 'Túi', 'Bộ sản phẩm 22 món cho mẹ và bé', 'Đang bán'),
(3128, 222, 189000, 25, 'Giỏ', 'Giỏ đựng đồ sơ sinh- làn đi sinh cho mẹ và bé', 'Đang bán'),
(3129, 222, 175000, 30, 'Túi', 'Túi trữ sữa hãng Babuu 250ml', 'Đang bán'),
(3130, 222, 99000, 25, 'Tuýp', 'Kem dưỡng da, dưỡng ẩm cho cả mẹ và bé', 'Đang bán'),
(3131, 222, 115000, 20, 'Bộ', 'Bộ gối nằm và gói chặn cao cấp  cho bé', 'Đang bán'),
(3132, 222, 145000, 20, 'Gói', 'Bông vệ sinh cắt miếng cho mẹ và bé', 'Đang bán'),
(3133, 222, 269000, 15, 'Bình', 'Bình sữa chống sặc Oberni cổ rộng co tay cầm', 'Đang bán'),
(3134, 222, 51000, 10, 'Bình', 'Bình sữa PP cổ thường', 'Đang bán'),
(3135, 222, 51000, 10, 'Bình', 'Bình sữa PP cổ hẹp', 'Đang bán'),
(3136, 222, 19000, 10, 'Cái', 'Núm ti chỉnh nha NIP nhập khẩu', 'Đang bán'),
(3137, 222, 55000, 15, 'Cái', 'Núm bình cổ hẹp', 'Đang bán'),
(3138, 222, 5000, 10, 'Cái', 'Núm bình cổ rộng', 'Đang bán'),
(3139, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3140, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3141, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3142, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3143, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3144, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3145, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3146, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3147, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3148, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3149, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3150, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3151, 222, 350000, 10, 'Gói', 'Tã em bé (cỡ vừa)', 'Đang bán'),
(3152, 218, 12354, 123, 'Gói', 'csc', 'Đang bán'),
(3153, 219, 2231231, 231, 'Gói', 'dfg', 'Đang bán'),
(3154, 215, 1200, 50, 'Chai', 'dcf', 'Đang bán'),
(3155, 216, -100, 12, 'Gói', 'thien', 'Đang bán');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  ADD KEY `id_hoadon` (`id_hoadon`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_chitietkhuyenmai`
--
ALTER TABLE `tbl_chitietkhuyenmai`
  ADD KEY `id_khuyenmai` (`id_khuyenmai`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_chitietphieunhaphang`
--
ALTER TABLE `tbl_chitietphieunhaphang`
  ADD KEY `id_phieunhaphang` (`id_phieunhaphang`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_dangnhap`
--
ALTER TABLE `tbl_dangnhap`
  ADD KEY `id_nhanvien` (`id_nhanvien`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `id_khachhang` (`id_khachhang`),
  ADD KEY `id_khuyenmai` (`id_khuyenmai`),
  ADD KEY `id_nhanvien` (`id_nhanvien`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  ADD PRIMARY KEY (`id_khuyenmai`);

--
-- Chỉ mục cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`id_loaisanpham`);

--
-- Chỉ mục cho bảng `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  ADD PRIMARY KEY (`id_nhacungcap`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`);

--
-- Chỉ mục cho bảng `tbl_phieunhaphang`
--
ALTER TABLE `tbl_phieunhaphang`
  ADD PRIMARY KEY (`id_phieunhaphang`),
  ADD KEY `id_nhanvien` (`id_nhanvien`),
  ADD KEY `id_nhacungcap` (`id_nhacungcap`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_loaisanpham` (`id_loaisanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT cho bảng `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  MODIFY `id_khuyenmai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `id_loaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT cho bảng `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  MODIFY `id_nhacungcap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id_nhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4036;

--
-- AUTO_INCREMENT cho bảng `tbl_phieunhaphang`
--
ALTER TABLE `tbl_phieunhaphang`
  MODIFY `id_phieunhaphang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3156;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  ADD CONSTRAINT `tbl_chitiethoadon_ibfk_1` FOREIGN KEY (`id_hoadon`) REFERENCES `tbl_hoadon` (`id_hoadon`),
  ADD CONSTRAINT `tbl_chitiethoadon_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_chitietkhuyenmai`
--
ALTER TABLE `tbl_chitietkhuyenmai`
  ADD CONSTRAINT `tbl_chitietkhuyenmai_ibfk_1` FOREIGN KEY (`id_khuyenmai`) REFERENCES `tbl_khuyenmai` (`id_khuyenmai`),
  ADD CONSTRAINT `tbl_chitietkhuyenmai_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_chitietphieunhaphang`
--
ALTER TABLE `tbl_chitietphieunhaphang`
  ADD CONSTRAINT `tbl_chitietphieunhaphang_ibfk_1` FOREIGN KEY (`id_phieunhaphang`) REFERENCES `tbl_phieunhaphang` (`id_phieunhaphang`),
  ADD CONSTRAINT `tbl_chitietphieunhaphang_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_dangnhap`
--
ALTER TABLE `tbl_dangnhap`
  ADD CONSTRAINT `tbl_dangnhap_ibfk_1` FOREIGN KEY (`id_nhanvien`) REFERENCES `tbl_nhanvien` (`id_nhanvien`);

--
-- Các ràng buộc cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `tbl_hoadon_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_khachhang` (`id_khachhang`),
  ADD CONSTRAINT `tbl_hoadon_ibfk_2` FOREIGN KEY (`id_khuyenmai`) REFERENCES `tbl_khuyenmai` (`id_khuyenmai`),
  ADD CONSTRAINT `tbl_hoadon_ibfk_3` FOREIGN KEY (`id_nhanvien`) REFERENCES `tbl_nhanvien` (`id_nhanvien`);

--
-- Các ràng buộc cho bảng `tbl_phieunhaphang`
--
ALTER TABLE `tbl_phieunhaphang`
  ADD CONSTRAINT `tbl_phieunhaphang_ibfk_1` FOREIGN KEY (`id_nhanvien`) REFERENCES `tbl_nhanvien` (`id_nhanvien`),
  ADD CONSTRAINT `tbl_phieunhaphang_ibfk_2` FOREIGN KEY (`id_nhacungcap`) REFERENCES `tbl_nhacungcap` (`id_nhacungcap`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_loaisanpham`) REFERENCES `tbl_loaisanpham` (`id_loaisanpham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
