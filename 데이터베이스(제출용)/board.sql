-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 17-12-22 20:41
-- 서버 버전: 5.7.20
-- PHP 버전: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `tnoter`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ordernumber` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `parcel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`title`, `content`, `email`, `password`, `name`, `ordernumber`, `date`, `phone`, `parcel`) VALUES
('문의 테스트', '문의내용 테스트', 'fjvbn2003@gmail.com', '0000', '김영주', '41234123', 'December 21, 2017, 3:32 pm', '010-9911-4533', '우체국'),
('배송은 잘 됬나요?', '잘 됬는지 궁금해요', 'test@test.com', '0000', '김영주', '341234', 'December 21, 2017, 3:33 pm', '010-0000-0000', 'CJ'),
(' 집에 갈 수 있어요', '하하하', 'test@test.com', '1111', '김영주', '2341234', 'December 21, 2017, 3:34 pm', '010-0000-0000', '우체국'),
('안녕하세요 구매 고객입니다.', '옥션에서 구매하였고 주소는 서울시-강서구-00동 입니다.\r\n주문 확인 부탁드려요.\r\n', 'test@test.com', '1111', '김영주', '022312', 'December 21, 2017, 3:39 pm', '010-0000-0000', '우체국'),
('yftycft', 'yctfytcftyctycft', 'test@test.com', '4444', 'ycftycft', '6776756', 'December 21, 2017, 3:40 pm', '010-0000-0000', '우체국');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
