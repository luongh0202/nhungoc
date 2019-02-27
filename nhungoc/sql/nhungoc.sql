CREATE DATABASE IF NOT EXISTS `OrderNN` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `OrderNN`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `amdin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) AUTO_INCREMENT,
  `name` text, -- tên
  `address` text, -- địa chỉ
  `namepro` text, -- tên hàng
  `code` text, -- mã sản phẩm
  `size` text, -- kích cỡ
  `color` text, -- màu sắc
  `quantity` int(11), -- số lượng
  `deposit` float(11), -- đặt cọc
  `total` float(11), -- tổng tiền
  `sale` float(11) DEFAULT 0, -- tiền giảm
  `alltotal` float(11) DEFAULT 0, -- tổng tiền chốt đơn
  `note` text, -- ghi chú
  `date` datetime DEFAULT CURRENT_TIMESTAMP, -- ngày tạo
  `shopee_cod` int(1) DEFAULT 0, -- phương thức vận chuyển
  `status` int(1) DEFAULT 0, -- trạng thái ship
  `status_monney` int(1) DEFAULT 0, -- trạng thái thanh toán
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------