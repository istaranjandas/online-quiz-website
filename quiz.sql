-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 04:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'Number of primitive data types in Java are ?', '6', '7', '8', '9', '8', '6'),
(2, 'What is the size of float and double in java? ', '32 and 64', '32 and 32', '64 and 64', '64 and 32', '32 and 64', '32 and 32'),
(3, 'Which component is used to compile, debug and execute the java programs?', 'JRE', 'JIT', 'JDK', 'JVM', 'JDK', 'JRE'),
(4, 'What is the extension of java code files?', '.js', '.txt', '.class', '.java', '.java', '.txt'),
(5, 'Which of the following is not an OOPS concept in Java?', 'Polymorphism', 'Inheritance', 'Compilation', 'Encapsulation', 'Compilation', 'Encapsulation');

-- --------------------------------------------------------

--
-- Table structure for table `js`
--

CREATE TABLE `js` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `js`
--

INSERT INTO `js` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'Which of the following is a disadvantage of using JavaScript?', 'Client-side JavaScript does not allow the reading or writing of files', 'JavaScript can not be used for Networking applications because there is no such support available', 'JavaScript doesn\"t have any multithreading or multiprocess capabilities', 'All of the above', 'All of the above', 'Client-side JavaScript does not allow the reading or writing of files'),
(2, 'Which of the following is a valid type of function javascript supports? ', 'named function', 'anonymous function', 'Both of the above', 'None of the above', 'Both of the above', 'named function'),
(3, 'Which built-in method returns the index within the calling String object of the first occurrence of the specified value?', 'getIndex()', 'location()', 'indexOf()', 'None of the above', 'indexOf()', 'None of the above'),
(4, 'Which of the following function of Number object forces a number to display in exponential notation?', 'toExponential()', 'toFixed()', 'toPrecision()', 'toLocaleString()', 'toExponential()', 'toPrecision()'),
(5, 'Which of the following function of Boolean object returns a string of either true or false depending upon the value of the object?', 'toSource()', 'valueOf()', 'toString()', 'None of the above', 'toString()', 'toString()');

-- --------------------------------------------------------

--
-- Table structure for table `login_reg`
--

CREATE TABLE `login_reg` (
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_reg`
--

INSERT INTO `login_reg` (`name`, `username`, `password`) VALUES
('Jestin John', 'jestinjohn', 'password'),
('TheRealStud', 'legitrading', 'password'),
('Gourav Raj', 'gourav', 'pass123'),
('Soumya', 'mc', 'mcx100'),
('Istaranjan Das', 'istaranjandas', 'password'),
('Istaranjan Das', 'istaranjandas', 'password'),
('Istaranjan', 'istaranjandas', 'hgfd'),
('Istaranjan', 'istaranjandas', 'hgfd'),
('Istaranjan', 'istaranjandas', 'hgfd'),
('Istaranjan', 'istaranjandas', 'hgfd'),
('Istaranjan', 'istaranjandas', 'hgfd');

-- --------------------------------------------------------

--
-- Table structure for table `ml`
--

CREATE TABLE `ml` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ml`
--

INSERT INTO `ml` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'Application of machine learning methods to large databases is called ', 'data mining', 'artificial intelligence', 'big data computing', 'internet of things', 'data mining', 'internet of things'),
(2, 'In what type of learning labelled training data is used ', 'unsupervised learning', 'supervised learning', 'reinforcement learning', 'active learning', 'supervised learning', 'active learning'),
(3, 'Which of the following is the best machine learning method?', 'scalable', 'accuracy', 'fast', 'all of the above', 'all of the above', 'fast'),
(4, 'The output of training process in machine learning is ', 'machine learning model', 'machine learning algorithm', 'null', 'accuracy', 'machine learning model', 'null'),
(5, 'Supervised learning and unsupervised clustering both require which is correct according to the statement.', 'output attribute', 'hidden attribute', 'input attribute', 'categorical attribute', 'input attribute', 'categorical attribute');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', 'Hypertext Preprocessor'),
(2, 'What will be the value of $var? ', '0', '1', '2', 'NULL', '0', '0'),
(3, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'headers_list', 'headers_list'),
(4, 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'PHP', 'PHP'),
(5, 'From which website you download this source code?', 'Softglobe.net', 'w3school.com', 'technopoints.co.in', 'php.net', 'technopoints.co.in', 'technopoints.co.in');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'Which of the following is the correct extension of the Python file?', '.python', '.pl', '.py', '.p', '.py', '.p'),
(2, 'Which type of Programming does Python support? ', 'object-oriented programming', 'structured programming', 'functional programming', 'all of the mentioned', 'all of the mentioned', 'structured programming'),
(3, 'Is Python case sensitive when dealing with identifiers? ', 'no', 'yes', 'machine dependent', 'none of the mentioned', 'no', 'yes'),
(4, 'All keywords in Python are in _________', 'Capitalized', 'lower case', 'UPPER CASE', 'None of the mentioned', 'None of the mentioned', 'UPPER CASE'),
(5, 'Which of the following is used to define a block of code in Python language? ', 'Indentation', 'Key', 'Brackets', 'All of the mentioned', 'Indentation', 'Key');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
