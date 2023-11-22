-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-01-2023 a las 05:13:06
-- Versión del servidor: 10.2.44-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `triumphare_proplayas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` varchar(1200) NOT NULL,
  `nodos` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `autor`, `titulo`, `contenido`, `nodos`, `pais`, `hora`, `fecha`) VALUES
(1, 'Admin', 'Prueba ', 'Cabo San Lucas es un balneario en el extremo sur de la pen&iacute;nsula de Baja California en M&eacute;xico, conocido por sus playas, actividades acu&aacute;ticas y vida nocturna. La Playa El M&eacute;dano es la principal del Cabo, con restaurantes al aire libre y numerosos bares. Despu&eacute;s de la marina, se encuentra el promontorio del Fin de la Tierra, donde est&aacute; la Playa del Amor y El Arco, una arcada natural en los riscos marinos. ', '00', '', '10:42:27', '2022-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`id`, `description`, `hora`, `fecha`) VALUES
(355, 'Admin', '11:30:55', '2022-07-06'),
(356, 'Admin', '04:38:31', '2022-07-06'),
(357, 'APREC', '05:11:06', '2022-07-06'),
(358, 'Admin', '05:18:26', '2022-07-06'),
(359, 'Admin', '11:48:00', '2022-07-07'),
(360, 'Admin', '02:04:02', '2022-07-07'),
(361, 'Admin', '03:36:20', '2022-07-07'),
(362, 'Admin', '09:16:07', '2022-07-11'),
(363, 'Admin', '11:17:50', '2022-07-11'),
(364, 'Admin', '10:50:39', '2022-07-12'),
(365, 'Admin', '12:30:06', '2022-07-12'),
(366, 'Admin', '12:30:11', '2022-07-12'),
(367, 'Admin', '01:56:27', '2022-07-12'),
(368, 'Admin', '05:02:42', '2022-07-12'),
(369, 'Admin', '06:05:07', '2022-07-12'),
(370, 'Admin', '11:25:28', '2022-07-13'),
(371, 'Admin', '11:43:38', '2022-07-13'),
(372, 'Admin', '11:43:52', '2022-07-13'),
(373, 'Admin', '11:45:50', '2022-07-13'),
(374, 'Admin', '12:13:25', '2022-07-14'),
(375, 'admin', '12:26:31', '2022-07-14'),
(376, 'admin', '12:26:35', '2022-07-14'),
(377, 'Admin', '12:26:38', '2022-07-14'),
(378, 'Admin', '12:26:42', '2022-07-14'),
(379, 'Admin', '01:05:00', '2022-07-14'),
(380, 'Admin', '04:45:23', '2022-07-14'),
(381, 'burntync', '02:57:58', '2022-07-19'),
(382, 'cnadmin', '09:44:07', '2022-07-24'),
(383, 'admin', '09:44:10', '2022-07-24'),
(384, 'cnadmin', '09:47:04', '2022-07-24'),
(385, 'admin', '09:47:07', '2022-07-24'),
(386, 'cnadmin', '09:49:59', '2022-07-24'),
(387, 'admin', '09:50:02', '2022-07-24'),
(388, 'cnadmin', '09:52:53', '2022-07-24'),
(389, 'admin', '09:52:57', '2022-07-24'),
(390, 'cnadmin', '09:55:48', '2022-07-24'),
(391, 'admin', '09:55:51', '2022-07-24'),
(392, 'cnadmin', '09:58:43', '2022-07-24'),
(393, 'admin', '09:58:47', '2022-07-24'),
(394, 'cnadmin', '10:01:40', '2022-07-24'),
(395, 'admin', '10:01:44', '2022-07-24'),
(396, 'cnadmin', '10:04:35', '2022-07-24'),
(397, 'admin', '10:04:39', '2022-07-24'),
(398, 'cnadmin', '10:07:29', '2022-07-24'),
(399, 'admin', '10:07:32', '2022-07-24'),
(400, 'cnadmin', '10:10:24', '2022-07-24'),
(401, 'admin', '10:10:28', '2022-07-24'),
(402, 'cnadmin', '10:35:48', '2022-07-24'),
(403, 'admin', '10:35:51', '2022-07-24'),
(404, 'cnadmin', '10:46:23', '2022-07-24'),
(405, 'admin', '10:46:25', '2022-07-24'),
(406, 'cnadmin', '10:56:59', '2022-07-24'),
(407, 'admin', '10:57:02', '2022-07-24'),
(408, 'cntriumphare', '11:07:34', '2022-07-24'),
(409, 'triumphare', '11:07:37', '2022-07-24'),
(410, 'cnadmin', '11:18:08', '2022-07-24'),
(411, 'admin', '11:18:11', '2022-07-24'),
(412, 'cnadmin', '11:28:41', '2022-07-24'),
(413, 'admin', '11:28:44', '2022-07-24'),
(414, 'cnadmin', '11:39:17', '2022-07-24'),
(415, 'admin', '11:39:20', '2022-07-24'),
(416, 'cnadmin', '11:49:55', '2022-07-24'),
(417, 'admin', '11:49:57', '2022-07-24'),
(418, 'cnadmin', '12:00:33', '2022-07-25'),
(419, 'admin', '12:00:36', '2022-07-25'),
(420, 'cntriumphare', '12:11:11', '2022-07-25'),
(421, 'triumphare', '12:11:14', '2022-07-25'),
(422, 'cnadmin', '12:21:50', '2022-07-25'),
(423, 'admin', '12:21:53', '2022-07-25'),
(424, 'cntriumphare', '12:32:26', '2022-07-25'),
(425, 'triumphare', '12:32:29', '2022-07-25'),
(426, 'cntriumphare', '12:43:05', '2022-07-25'),
(427, 'triumphare', '12:43:07', '2022-07-25'),
(428, 'cnadmin', '12:53:44', '2022-07-25'),
(429, 'admin', '12:53:47', '2022-07-25'),
(430, 'cnadmin', '01:04:22', '2022-07-25'),
(431, 'admin', '01:04:25', '2022-07-25'),
(432, 'cnadmin', '01:15:02', '2022-07-25'),
(433, 'admin', '01:15:05', '2022-07-25'),
(434, 'cnadmin', '01:25:43', '2022-07-25'),
(435, 'admin', '01:25:46', '2022-07-25'),
(436, 'cnadmin', '01:36:23', '2022-07-25'),
(437, 'admin', '01:36:25', '2022-07-25'),
(438, 'cnadmin', '01:47:02', '2022-07-25'),
(439, 'admin', '01:47:04', '2022-07-25'),
(440, 'cnadmin', '01:57:42', '2022-07-25'),
(441, 'admin', '01:57:45', '2022-07-25'),
(442, 'cnadmin', '02:08:20', '2022-07-25'),
(443, 'admin', '02:08:23', '2022-07-25'),
(444, 'cnadmin', '02:19:03', '2022-07-25'),
(445, 'admin', '02:19:06', '2022-07-25'),
(446, 'cntriumphare', '02:29:46', '2022-07-25'),
(447, 'triumphare', '02:29:48', '2022-07-25'),
(448, 'cnadmin', '02:40:27', '2022-07-25'),
(449, 'admin', '02:40:29', '2022-07-25'),
(450, 'cnadmin', '02:51:08', '2022-07-25'),
(451, 'admin', '02:51:11', '2022-07-25'),
(452, 'cnadmin', '03:01:49', '2022-07-25'),
(453, 'admin', '03:01:52', '2022-07-25'),
(454, 'cnadmin', '03:12:27', '2022-07-25'),
(455, 'admin', '03:12:30', '2022-07-25'),
(456, 'cntriumphare', '07:15:05', '2022-07-26'),
(457, 'triumphare', '07:15:08', '2022-07-26'),
(458, 'cntriumphare', '08:14:28', '2022-07-26'),
(459, 'triumphare', '08:14:30', '2022-07-26'),
(460, 'cntriumphare', '09:13:52', '2022-07-26'),
(461, 'triumphare', '09:13:55', '2022-07-26'),
(462, 'cnadmin', '10:13:17', '2022-07-26'),
(463, 'admin', '10:13:19', '2022-07-26'),
(464, 'cnadmin', '11:12:47', '2022-07-26'),
(465, 'admin', '11:12:50', '2022-07-26'),
(466, 'cnadmin', '12:12:27', '2022-07-26'),
(467, 'admin', '12:12:29', '2022-07-26'),
(468, 'cntriumphare', '01:11:42', '2022-07-26'),
(469, 'triumphare', '01:11:45', '2022-07-26'),
(470, 'cnadmin', '02:10:47', '2022-07-26'),
(471, 'admin', '02:10:49', '2022-07-26'),
(472, 'cntriumphare', '03:09:51', '2022-07-26'),
(473, 'triumphare', '03:09:54', '2022-07-26'),
(474, 'cnadmin', '04:08:57', '2022-07-26'),
(475, 'admin', '04:08:59', '2022-07-26'),
(476, 'cnadmin', '05:07:57', '2022-07-26'),
(477, 'admin', '05:08:00', '2022-07-26'),
(478, 'cntriumphare', '06:07:36', '2022-07-26'),
(479, 'triumphare', '06:07:39', '2022-07-26'),
(480, 'cntriumphare', '07:07:49', '2022-07-26'),
(481, 'triumphare', '07:07:52', '2022-07-26'),
(482, 'cnadmin', '08:08:18', '2022-07-26'),
(483, 'admin', '08:08:21', '2022-07-26'),
(484, 'cntriumphare', '09:08:33', '2022-07-26'),
(485, 'triumphare', '09:08:36', '2022-07-26'),
(486, 'cnadmin', '10:08:19', '2022-07-26'),
(487, 'admin', '10:08:22', '2022-07-26'),
(488, 'cnadmin', '11:08:23', '2022-07-26'),
(489, 'admin', '11:08:25', '2022-07-26'),
(490, 'cntriumphare', '12:07:42', '2022-07-27'),
(491, 'triumphare', '12:07:45', '2022-07-27'),
(492, 'cntriumphare', '01:06:45', '2022-07-27'),
(493, 'triumphare', '01:06:47', '2022-07-27'),
(494, 'cnadmin', '02:06:14', '2022-07-27'),
(495, 'admin', '02:06:17', '2022-07-27'),
(496, 'cnadmin', '03:05:41', '2022-07-27'),
(497, 'admin', '03:05:43', '2022-07-27'),
(498, 'cntriumphare', '04:04:56', '2022-07-27'),
(499, 'triumphare', '04:04:58', '2022-07-27'),
(500, 'cnadmin', '05:04:08', '2022-07-27'),
(501, 'admin', '05:04:11', '2022-07-27'),
(502, 'cnadmin', '06:03:12', '2022-07-27'),
(503, 'admin', '06:03:15', '2022-07-27'),
(504, 'cnadmin', '07:02:20', '2022-07-27'),
(505, 'admin', '07:02:23', '2022-07-27'),
(506, 'cnadmin', '07:04:14', '2022-07-27'),
(507, 'admin', '07:04:21', '2022-07-27'),
(508, 'cnadmin', '12:11:39', '2022-07-27'),
(509, 'admin', '12:11:46', '2022-07-27'),
(510, 'cnadmin', '12:14:23', '2022-07-27'),
(511, 'admin', '12:14:29', '2022-07-27'),
(512, 'Admin', '01:51:12', '2022-07-30'),
(513, 'cnadmin', '09:55:40', '2022-07-31'),
(514, 'admin', '09:55:46', '2022-07-31'),
(515, 'cnadmin', '09:58:40', '2022-07-31'),
(516, 'admin', '09:58:46', '2022-07-31'),
(517, 'cnadmin', '10:01:28', '2022-07-31'),
(518, 'admin', '10:01:34', '2022-07-31'),
(519, 'BIKIMI', '04:09:04', '2022-08-01'),
(520, 'BIKIMI', '04:09:16', '2022-08-01'),
(521, 'Admin', '04:14:50', '2022-08-01'),
(522, 'BIKIMI', '04:17:05', '2022-08-01'),
(523, 'APREC', '04:17:44', '2022-08-01'),
(524, 'prueba', '04:22:06', '2022-08-01'),
(525, 'Prueba', '04:22:18', '2022-08-01'),
(526, 'Prueba', '04:24:35', '2022-08-01'),
(527, 'Prueba', '04:26:08', '2022-08-01'),
(528, 'BIKIMI', '04:29:42', '2022-08-01'),
(529, 'Admin', '04:34:09', '2022-08-01'),
(530, 'prueba', '04:45:22', '2022-08-01'),
(531, 'Admin', '04:46:10', '2022-08-01'),
(532, 'BIKIMI', '06:48:20', '2022-08-01'),
(533, 'BIKIMI', '06:52:31', '2022-08-01'),
(534, 'Admin', '07:10:36', '2022-08-01'),
(535, 'Admin', '11:26:32', '2022-08-03'),
(536, 'Admin', '11:26:39', '2022-08-03'),
(537, 'Admin', '01:33:20', '2022-08-03'),
(538, 'Admin', '06:10:30', '2022-08-03'),
(539, 'Admin', '06:11:03', '2022-08-03'),
(540, 'BIKIMI', '06:31:09', '2022-08-03'),
(541, 'Admin', '08:29:00', '2022-08-03'),
(542, 'Admin', '11:05:00', '2022-08-04'),
(543, 'Admin', '11:09:46', '2022-08-04'),
(544, 'Admin', '11:09:51', '2022-08-04'),
(545, 'APRE', '11:18:33', '2022-08-04'),
(546, 'APREC', '11:18:39', '2022-08-04'),
(547, 'Admin', '11:19:45', '2022-08-04'),
(548, 'Prueba', '11:22:15', '2022-08-04'),
(549, 'Prueba', '11:22:40', '2022-08-04'),
(550, 'Prueba', '11:28:18', '2022-08-04'),
(551, 'Admin', '11:29:22', '2022-08-04'),
(552, 'Prueba', '11:35:23', '2022-08-04'),
(553, 'Urccc (universidades Regionales Costeras Chile Cen', '02:02:55', '2022-08-04'),
(554, 'Urccc (universidades Regionales Costeras Chile Cen', '02:03:06', '2022-08-04'),
(555, 'Admin', '02:03:15', '2022-08-04'),
(556, 'Admin', '02:45:15', '2022-08-04'),
(557, 'APREC', '11:04:15', '2022-08-05'),
(558, 'Admin', '09:26:33', '2022-08-08'),
(559, 'Prueba', '09:26:47', '2022-08-08'),
(560, 'Admin', '09:26:58', '2022-08-08'),
(561, 'Daniel', '09:27:22', '2022-08-08'),
(562, 'Daniel', '09:27:28', '2022-08-08'),
(563, 'Admin', '10:09:31', '2022-08-08'),
(564, 'Admin', '10:23:51', '2022-08-08'),
(565, 'Admin', '10:26:00', '2022-08-08'),
(566, 'Admin', '10:29:39', '2022-08-08'),
(567, 'Admin', '10:29:41', '2022-08-08'),
(568, 'Admin', '10:32:23', '2022-08-08'),
(569, 'Prueba', '10:36:30', '2022-08-08'),
(570, 'Admin', '11:12:57', '2022-08-08'),
(571, 'Admin', '11:15:58', '2022-08-08'),
(572, 'Prueba', '11:18:00', '2022-08-08'),
(573, 'Admin', '11:53:43', '2022-08-08'),
(574, 'Prueba', '01:24:06', '2022-08-08'),
(575, 'Admin', '01:31:36', '2022-08-08'),
(576, 'Admin', '02:03:27', '2022-08-08'),
(577, 'Admin', '02:04:16', '2022-08-08'),
(578, 'Admin', '02:04:28', '2022-08-08'),
(579, 'Prueba', '02:41:29', '2022-08-08'),
(580, 'Admin', '02:43:07', '2022-08-08'),
(581, 'BIKIMI', '02:43:15', '2022-08-08'),
(582, 'Prueba', '02:43:58', '2022-08-08'),
(583, 'Prueba', '02:45:32', '2022-08-08'),
(584, 'Admin', '02:47:54', '2022-08-08'),
(585, 'Prueba', '02:48:59', '2022-08-08'),
(586, 'Admin', '02:49:28', '2022-08-08'),
(587, 'proplayas', '02:52:09', '2022-08-08'),
(588, 'Sared13', '02:56:57', '2022-08-08'),
(589, 'Daniel', '02:57:21', '2022-08-08'),
(590, 'Daniel', '02:58:00', '2022-08-08'),
(591, 'Daniel', '02:58:27', '2022-08-08'),
(592, 'Daniel', '02:59:03', '2022-08-08'),
(593, 'Sared13', '02:59:20', '2022-08-08'),
(594, 'Sared13', '03:00:22', '2022-08-08'),
(595, 'Sared13', '03:02:00', '2022-08-08'),
(596, 'Admin', '03:02:57', '2022-08-08'),
(597, 'proplayas', '03:03:29', '2022-08-08'),
(598, 'Integrante', '03:07:53', '2022-08-08'),
(599, 'Integrante', '03:08:27', '2022-08-08'),
(600, 'Integrante', '03:11:01', '2022-08-08'),
(601, 'Integrante', '03:13:42', '2022-08-08'),
(602, 'Admin', '04:41:04', '2022-08-08'),
(603, 'Admin', '12:10:41', '2022-08-11'),
(604, 'Admin', '01:09:28', '2022-08-11'),
(605, 'Admin', '01:24:29', '2022-08-11'),
(606, 'BIKIMI', '03:02:56', '2022-08-12'),
(607, 'BIKIMI', '03:04:03', '2022-08-12'),
(608, 'Admin', '03:06:09', '2022-08-12'),
(609, 'Admin', '03:10:53', '2022-08-12'),
(610, 'BIKIMI', '03:11:03', '2022-08-12'),
(611, 'BIKIMI', '03:12:07', '2022-08-12'),
(612, 'Admin', '03:13:28', '2022-08-12'),
(613, 'BIKIMI', '03:14:06', '2022-08-12'),
(614, 'Admin', '03:14:49', '2022-08-12'),
(615, 'RichardTough', '12:39:16', '2022-08-18'),
(616, 'StephenPhabs', '12:39:17', '2022-08-18'),
(617, 'XMC.PL-Master', '10:58:28', '2022-08-19'),
(618, 'Admin', '04:00:19', '2022-08-19'),
(619, 'LarryFef', '05:18:33', '2022-08-27'),
(620, 'XMC.PL-Master', '02:32:16', '2022-08-27'),
(621, 'ManuelTelia', '05:58:35', '2022-08-30'),
(622, 'maximllFAK', '07:25:31', '2022-09-01'),
(623, 'StephenPhabs', '08:50:57', '2022-09-02'),
(624, 'RichardTough', '08:50:57', '2022-09-02'),
(625, 'AndrewSon', '08:57:01', '2022-09-05'),
(626, 'Admin', '09:10:11', '2022-09-05'),
(627, 'Admin', '09:26:53', '2022-09-05'),
(628, 'triumphare', '09:28:17', '2022-09-05'),
(629, 'triumphare', '09:28:27', '2022-09-05'),
(630, 'Admin', '09:28:48', '2022-09-05'),
(631, 'Admin', '10:48:09', '2022-09-05'),
(632, 'Admin', '10:48:14', '2022-09-05'),
(633, 'SoftwareSnoks', '04:50:21', '2022-09-06'),
(634, 'Admin', '04:29:41', '2022-09-07'),
(635, 'APREC', '04:43:28', '2022-09-07'),
(636, 'MichaelWed', '10:31:34', '2022-09-09'),
(637, 'LarryFef', '06:48:45', '2022-09-10'),
(638, 'StephenPhabs', '12:57:52', '2022-09-12'),
(639, 'RichardTough', '12:57:52', '2022-09-12'),
(640, 'Jamessen', '08:57:56', '2022-09-12'),
(641, 'ManuelTelia', '11:27:56', '2022-09-16'),
(642, 'SoftwareSnoks', '12:25:02', '2022-09-17'),
(643, 'maximllFAK', '08:04:54', '2022-09-17'),
(644, 'MichaelSmurn', '05:51:11', '2022-09-22'),
(645, 'Jamessen', '05:47:01', '2022-09-25'),
(646, 'ADMIN', '05:02:02', '2022-09-30'),
(647, 'ADMIN', '05:02:12', '2022-09-30'),
(648, 'BIKIMI', '05:02:29', '2022-09-30'),
(649, 'triumphare', '05:04:03', '2022-09-30'),
(650, 'Admin', '05:04:24', '2022-09-30'),
(651, 'RichardTough', '02:28:04', '2022-10-01'),
(652, 'ThoomaasDic', '06:29:55', '2022-10-08'),
(653, 'JaameesSoazy', '11:58:23', '2022-10-14'),
(654, 'LarryFef', '02:08:57', '2022-10-20'),
(655, 'RichardTough', '02:08:57', '2022-10-20'),
(656, 'LarryFef', '02:51:03', '2022-10-20'),
(657, 'JamesRew', '02:57:41', '2022-10-20'),
(658, 'maximllFAK', '03:16:38', '2022-10-24'),
(659, 'cnadmin', '06:14:21', '2022-11-03'),
(660, 'admin', '06:14:28', '2022-11-03'),
(661, 'user', '08:32:52', '2022-11-03'),
(662, '?', '08:34:05', '2022-11-03'),
(663, '?', '08:34:23', '2022-11-03'),
(664, 'Admin', '08:34:51', '2022-11-03'),
(665, 'user', '08:35:58', '2022-11-03'),
(666, 'user', '08:36:35', '2022-11-03'),
(667, 'Admin', '08:08:11', '2022-11-10'),
(668, 'Admin', '08:17:38', '2022-11-10'),
(669, 'Admin', '06:36:15', '2022-11-14'),
(670, 'Admin', '07:29:17', '2022-11-14'),
(671, 'nal', '05:42:26', '2022-11-21'),
(672, 'JaameesSoazy', '04:18:28', '2022-11-24'),
(673, 'Karlossokam', '02:21:46', '2022-11-28'),
(674, 'StefankaError', '09:57:36', '2022-12-01'),
(675, 'Michadfelhoatt', '11:42:06', '2022-12-03'),
(676, 'LeautheerVew', '12:34:07', '2022-12-04'),
(677, 'VeroniksError', '06:53:55', '2022-12-04'),
(678, 'Admin', '09:54:03', '2022-12-04'),
(679, 'Naddiniskam', '07:03:46', '2022-12-06'),
(680, 'Eugenerek', '03:35:51', '2022-12-07'),
(681, 'StefankaError', '02:09:50', '2022-12-08'),
(682, 'TravisCeasy', '06:33:39', '2022-12-19'),
(683, 'MichaelBrofe', '07:16:28', '2022-12-19'),
(684, 'Eugenerek', '04:47:08', '2022-12-21'),
(685, 'StefankaError', '10:12:04', '2022-12-25'),
(686, 'topsamaraweich', '09:53:19', '2022-12-27'),
(687, 'DastinaError', '04:21:55', '2022-12-29'),
(688, 'Doyleslalm', '04:11:12', '2023-01-02'),
(689, 'DastinaError', '10:50:59', '2023-01-06'),
(690, 'Davidzef', '09:29:01', '2023-01-16'),
(691, 'Eugenerek', '02:08:05', '2023-01-17'),
(692, 'SheilaWouro', '07:44:43', '2023-01-17'),
(693, 'admin', '08:45:14', '2023-01-18'),
(694, 'ADMIN', '08:45:23', '2023-01-18'),
(695, 'Admin', '08:45:29', '2023-01-18'),
(696, 'Admin', '10:16:19', '2023-01-18'),
(697, 'Admin', '10:16:24', '2023-01-18'),
(698, 'Reefe', '03:36:17', '2023-01-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE `integrantes` (
  `id_inte` int(11) NOT NULL,
  `fkid_nodo` varchar(50) NOT NULL,
  `fkroles` varchar(50) NOT NULL,
  `psswd` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombreinte` varchar(100) NOT NULL,
  `formaciongd` varchar(100) NOT NULL,
  `formacionpg` varchar(100) NOT NULL,
  `area_ex` varchar(100) NOT NULL,
  `contacto` varchar(100) DEFAULT NULL,
  `codigo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `integrantes`
--

INSERT INTO `integrantes` (`id_inte`, `fkid_nodo`, `fkroles`, `psswd`, `usuario`, `nombreinte`, `formaciongd`, `formacionpg`, `area_ex`, `contacto`, `codigo`) VALUES
(24, '3', '2', 'Prueba', 'Prueba', 'Prueba2', 'Prueba', 'Prueba ', 'Prueba', 'kito.g2arcia.perez@hotmail.com', 'A01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `fkid_nodo` int(11) NOT NULL,
  `titulo_libro` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `autorl` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigo_nodo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `pdfl` varchar(1200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `fkid_nodo`, `titulo_libro`, `autorl`, `codigo_nodo`, `fecha`, `hora`, `pdfl`) VALUES
(3, 1, 'libro', 'Admin', '00', '2022-06-30', '02:29:06', 'Libros/cabospdf.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nodos`
--

CREATE TABLE `nodos` (
  `id` int(11) NOT NULL,
  `fktnodo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gdA` varchar(50) CHARACTER SET latin1 NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `pais` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `codigo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nombreN` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `url` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `video` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kmz` text CHARACTER SET latin1 NOT NULL,
  `psswd` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `usuario` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fkroles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nodos`
--

INSERT INTO `nodos` (`id`, `fktnodo`, `gdA`, `title`, `pais`, `ciudad`, `codigo`, `nombreN`, `url`, `video`, `kmz`, `psswd`, `usuario`, `email`, `fkroles`) VALUES
(1, '1', '', 'Admin', '', '', '00', 'Admin', '', '.', '', 'Admin', 'Admin', NULL, 1),
(3, '1', 'Dr', 'Sergio de Mattos Fonseca', 'BRASIL', 'NITEROI', 'A01', 'APREC', 'PDFs/a01-aorec-brapdf.pdf', '', '', 'APREC', 'APREC', NULL, 0),
(4, '1', 'Lic', 'Gladys PÃ©rez de La Fuente', 'MÃ©xico', 'PLAYA DEL CARMEN', 'A02', 'RIVIERA MAYA', 'PDFs/a02-rivieramaya-mex202006pdf.pdf', '', 'https://kmlviewer.nsspot.net/?state=%7B\"ids\":%5B\"1qdErNIqiFr8Iul-59271ELajYtFGFm97\"%5D,\"action\":\"open\",\"userId\":\"111977418720149780886\",\"resourceKeys\":%7B%7D%7D', 'RIVIERA MAYA', 'RIVIERA MAYA', NULL, 0),
(5, '1', 'Lic', 'Rafael Pe&ntilde;aloza Montilla', 'VENEZUELA', 'MARACAIBO', 'A03', 'AZUL AMBIENTALISTAS', 'PDFs/a03-fza-venpdf.pdf', '', '', 'AZUL AMBIENTALISTAS', 'AZUL AMBIENTALISTAS', NULL, 0),
(6, '2', 'Ing', 'Claudia D&iacute;az Mendoza', 'COLOMBIA', 'CARTAGENA', 'C05', 'GIA', 'PDFs/c05-gia-col20206pdf.pdf', '', '', 'GIA', 'GIA', NULL, 0),
(7, '2', 'Dr', 'GUSTAVO EUGENIO ECHEVERRI JARAMILLO', 'COLOMBIA', 'CARTAGENA', 'C06', 'GIMA', 'PDFs/c06-gima-col202006pdf.pdf', 'https://www.youtube.com/embed/__n5VYvNzhI', '', 'GIMA', 'GIMA', NULL, 0),
(8, '3', 'Ing', 'Camilo M. Botero', 'COLOMBIA', 'SANTA MARTA', 'E07', 'SISTEMAS COSTEROS', 'PDFs/e07-sisco-col202110pdf.pdf', 'https://www.youtube.com/embed/6UqsSYjWW70', '', 'SISTEMAS COSTEROS', 'SISTEMAS COSTEROS', NULL, 0),
(9, '3', 'Dr', 'Paul Geerders', 'HOLANDA', 'UTRECH', 'E08', 'PG CONSULTANCY', 'PDFs/e08-pgconsultancy-holpdf.pdf', '', '', 'PG CONSULTANCY', 'PG CONSULTANCY', NULL, 0),
(11, '2', 'Lic', 'Daniel de &Aacute;lava Granese', 'URUGUAY', 'MALDONADO', 'C10', 'MCISUR', 'PDFs/c10-mcisur-uru202006pdf.pdf', '', '', 'MCISUR', 'MCISUR', NULL, 0),
(12, '1', 'Ing', 'Paul Geerders', 'COLUMBIA', 'URABA', 'A09', 'BIOMUNICIPIOS', 'PDFs/a09-cab-colpdf.pdf', '', '', 'BIOMUNICIP', 'BIOMUNICIP', NULL, 0),
(13, '2', 'Lic', 'EDUARD ARIZA SOLIS', 'ESPAÃ‘A', 'BARCELONA', 'C11', 'CATALUNYA', 'PDFs/c11-catakunyaesp202002pdf.pdf', '', '', 'CATALUNYA', 'CATALUNYA', NULL, 0),
(14, '2', 'Dr', 'Giorgio Anfuso', 'ESPAÃ‘A', 'Cadiz', 'C12', 'ES-UCA', 'PDFs/c12-uca-esp202006pdf.pdf', '', '', 'ESUCA', 'ESUCA', NULL, 0),
(16, '2', 'Ing', 'Carlos Alberto Zárate Yepes', 'Colombia', 'Medellín', 'C15', 'OCEANICOS - POLYGESTA', 'PDFs/c15-oceanicos-col202007pdf.pdf', '', '', 'OCEANICOS POLYGESTA', 'OCEANICOS POLYGESTA', NULL, 0),
(17, '2', 'Dr', 'Marcus Polette', 'Brasil', '', 'C16', 'Laborat&oacute;rio de Gest&atilde;o Costeira Integrada - UNIVALI', 'PDFs/c16-lgciunivali-bra202007pdf.pdf', '', '', 'Laboratorio de Gestion', 'Laboratorio de Gestion', NULL, 0),
(18, '2', 'Dr', 'Carolina PeÃ±a Alonso', 'Canarias', '', 'C17', 'GFyMA', 'PDFs/c17-gfyma-esp202006pdf.pdf', '', '', 'GFyMA', 'GFyMA', NULL, 0),
(19, '2', 'Dr', 'Carlos Pereira da Silva', 'Portugal', 'Lisboa', 'C19', 'CICS.NOVA, Centro Interdisciplinar de Ci&ecirc;ncias Sociais', 'PDFs/c19-cicsnova-por202006pdf.pdf', '', '', 'CICSNOVA', 'CICSNOVA', NULL, 0),
(20, '2', 'Dr', 'Gloria I. LÃ³pez', 'Colombia', '', 'C20', 'UNIVERSIDAD EAFIT', 'PDFs/c20-eafit-col202006pdf.pdf', '', '', 'UNIVERSIDAD EAFIT', 'UNIVERSIDAD EAFIT', NULL, 0),
(21, '2', 'Lic', 'Isabel Calvo Gonzalez ', 'Costa Rica', 'Puntarenas', 'C21', 'Programa Desarrollo Integral Comunitario Costero. Universidad Nacional, Costa Rica', 'PDFs/c21-pdiccuncr-crcpdf.pdf', '', '', 'Programa Desarrollo Integral Comunitario Costero. ', 'Programa Desarrollo Integral Comunitario Costero. ', NULL, 0),
(22, '2', 'Dr', 'Ana Faggi', 'Argentina', 'Pedernera ', 'C22', 'Grupo ISAC', 'PDFs/c21-pdiccuncr-crcpdf.pdf', '', '', 'Grupo ISAC', 'Grupo ISAC', NULL, 0),
(23, '2', 'Ing', 'Nubia Mireya Garz&oacute;n Barrero', 'Colombia', 'San Bernardo del Viento, Mo&ntilde;itos ', 'C23', 'Nodo UMonteria', 'PDFs/c23-monteria-col202006pdf.pdf', '', '', 'Nodo UMonteria', 'Nodo UMonteria', NULL, 0),
(24, '2', 'Dr', 'Omar Cervantes Rosas', 'MEXICO', 'MANZANILLO', 'C24', 'BIKIMI', 'PDFs/c24-bikimi-mex202006pdf.pdf', '', '', 'BIKIMI', 'BIKIMI', 'omar_cervantes@ucol.mx', 0),
(25, '2', 'Dr', 'Maritza Barreto', ' Puerto Rico', '', 'C25', ' Red de Playas de Puerto Rico y el Caribe', 'PDFs/c25-uprpue202006pdf.pdf', '', '', ' Red de Playas de Puerto Rico y el Caribe', ' Red de Playas de Puerto Rico y el Caribe', NULL, 0),
(26, '2', 'Dra', 'Gabriela Camboim Rockett', 'Brasil', 'R&iacute;o Grande del Sur ', 'C26', 'UFGRS', 'PDFs/c26-ufgrs-bra202005pdf.pdf', '', '', 'UFGRS', 'UFGRS', NULL, 0),
(27, '2', 'Dra', 'Cecilia Luc&iacute;a Mantec&oacute;n', 'Argentina', 'Buenos Aires', 'C28', 'Mar del Plata', 'PDFs/c28-mdp-argpdf.pdf', '', '', 'Mar del Plata', 'Mar del Plata', NULL, 0),
(28, '2', 'Dra', 'ELIN RAQUEL MARQUEZ GULLOSO', 'Colombia', 'Riohacha', 'C29', 'Uniguajira', 'PDFs/c29-uniguajira-col202006pdf.pdf', '', '', 'Uniguajira', 'Uniguajira', NULL, 0),
(60, '1', 'Lic', 'Roberto Ca&ntilde;amero Galvez', 'Peru', 'Lima', 'A13', 'Ecoplayas', 'PDFs/a13-ecoplayas-per202006pdf.pdf', '', '', 'Ecoplayas', 'Ecoplayas', NULL, 0),
(61, '1', 'Dr', 'Angel Herrera Ulloa', 'Costa Rica', 'Ciudad de Puntarenas', 'A18', 'Playas Pac&iacute;fico Central de Costa Rica', 'PDFs/a18-ppccr-crcpdf.pdf', '', '', 'Playas Pac&iacute;fico Central de Costa Rica', 'Playas Pac&iacute;fico Central de Costa Rica', NULL, 0),
(62, '1', 'Lic', 'Martha Moctezuma Navarro', 'M&eacute;xico', 'Los Cabos', 'A30', 'Los Cabos Coastkeeper, A. C.', 'PDFs/a30-lcck-mex202006pdf.pdf', '', '', 'Los Cabos Coastkeeper, A. C.', 'Los Cabos Coastkeeper, A. C.', NULL, 0),
(63, '1', 'Lic', 'Briana Bombana', '', '', 'A32', 'Sou Praia', 'PDFs/a32-soupraia-bra202006pdf.pdf', '', '', 'Sou Praia', 'Sou Praia', NULL, 0),
(64, '1', 'Lic', 'P&iacute;a Valeria Le&oacute;n Morales', 'Chile', 'V Regi&oacute;n de Valpara&iacute;so', 'A55', 'Alianza Playera de Chile', 'PDFs/a55-apch-chipdf.pdf', '', '', 'Alianza Playera de Chile', 'Alianza Playera de Chile', NULL, 0),
(65, '1', 'Lic', 'Yazmin Guadalupe Rubio Ponce', 'Mexico', 'YucatÃ¡n', 'A60', 'Altamare', 'PDFs/a60-altamare-mex202008pdf.pdf', '', '', 'Altamare', 'Altamare', NULL, 0),
(66, '1', 'Ing', 'Paloma Arias Ordiales', 'Brasil', 'R&iacute;o de Janeiro', 'A61', 'INSTITUTO ESCOLA DO MAR- IEMAR', 'PDFs/a61-iemar-bra202011pdf.pdf', '', '', 'INSTITUTO ESCOLA DO MAR- IEMAR', 'INSTITUTO ESCOLA DO MAR- IEMAR', NULL, 0),
(67, '1', 'Tec', 'Luz Stella Tisn&eacute;s', 'Colombia', 'Pereira', 'A69', 'LT-San Miguel', 'PDFs/a69-tlsanmiguel-col202009pdf.pdf', '', '', 'LT-San Miguel', 'LT-San Miguel', NULL, 0),
(68, '1', 'Ciudadano', 'MARTHA CECILIA VALLEJO LUZURIAGA ', 'Ecuador', 'GUAYAQUIL', 'A74', 'CIUDADAN&Iacute;A ACTIVA', 'PDFs/a74-ciuactiva-ecu202103pdf.pdf', '', '', 'CIUDADAN&Iacute;A ACTIVA', 'CIUDADAN&Iacute;A ACTIVA', NULL, 0),
(69, '2', 'Dra', 'Lidia Silva I&ntilde;iguez', 'M&eacute;xico', '', 'C04', 'PACIFICO CENTRO-SUR MEXICANO', 'PDFs/c04-pcsm-mexpdf.pdf', '', '', 'PACIFICO CENTRO-SUR MEXICANO', 'PACIFICO CENTRO-SUR MEXICANO', NULL, 0),
(70, '2', 'Dr', 'Juan Alfredo Cabrera Hern&aacute;ndez', 'Cuba', 'Matanzas', 'C14', 'COSTATENAS-OFIPLAYA (MATANZAS-CUBA)', 'PDFs/c14-costatenas-cub202008pdf.pdf', '', '', 'COSTATENAS-OFIPLAYA (MATANZAS-CUBA)', 'COSTATENAS-OFIPLAYA (MATANZAS-CUBA)', NULL, 0),
(71, '2', 'Dr', 'Alfredo Jaramillo V&eacute;lez', 'Colombia', 'Antoquia', 'C31', 'Urab&aacute;', 'PDFs/c31-uraba-col202006pdf.pdf', '', '', 'Urab&aacute;', 'Urab&aacute;', NULL, 0),
(72, '2', 'Dr', 'Flavia Moraes Lins de Barros', 'Brasil', 'S&atilde;o Paulo', 'C33', ' Laborat&oacute;rio de Geografia Marinha da UFRJ', 'PDFs/c33-ufrj-brasil202109pdf.pdf', '', '', ' Laborat&oacute;rio de Geografia Marinha da UFRJ', ' Laborat&oacute;rio de Geografia Marinha da UFRJ', NULL, 0),
(73, '2', 'Dr', 'Jos&eacute; Rodrigues de Souza Filho', 'Brasil', 'S&atilde;o Paulo', 'C34', ' Grupo PARANO&Aacute; - IF Baiano / UFBA', 'PDFs/c34-paranoa-bra202006pdf.pdf', '', '', ' Grupo PARANO&Aacute; - IF Baiano / UFBA', ' Grupo PARANO&Aacute; - IF Baiano / UFBA', NULL, 0),
(74, '2', 'Dra', ' CAROLINA MARTINEZ REYES', 'Chile', 'Litoral Central', 'C35', 'C35 UC_UCV', 'PDFs/c35-ucucv-chi202006pdf.pdf', '', '', 'C35 UC_UCV', 'C35 UC_UCV', NULL, 0),
(75, '2', 'Dr', 'Humberto Garc&eacute;s B.', 'Colombia', 'Santa Marta', 'C36', ' BioCostas-UP', 'PDFs/c36-biocostasup-pan202012pdf.pdf', '', '', ' BioCostas-UP', ' BioCostas-UP', NULL, 0),
(76, '2', '', 'Manuel Contreras-L&oacute;pez', 'Ecuador', ' Manta - Manab&iacute; ', 'C38', 'Ecuador Centro - Norte', 'PDFs/c38-enc-ecupdf.pdf', '', '', 'Ecuador Centro - Norte', 'Ecuador Centro - Norte', NULL, 0),
(77, '2', '', 'Manuel Contreras L&oacute;pez', 'Chile', 'Valpara&iacute;so', 'C39', 'URCCC (Universidades Regionales Costeras Chile Central)', 'PDFs/c39-urccc-chi202006pdf.pdf', '', '', 'URCCC (Universidades Regionales Costeras Chile Cen', 'URCCC (Universidades Regionales Costeras Chile Cen', NULL, 0),
(78, '2', 'Lic', 'Daniel Telles', 'Brasil', 'Paran&aacute;', 'C41', 'Parana', 'PDFs/c41-parana-bra202007pdf.pdf', '', '', 'Parana', 'Parana', NULL, 0),
(79, '2', 'Dr', 'Mynor Cord&oacute;n', '', '', 'C42', 'SICAUS', 'PDFs/c42-sicaus-guapdf.pdf', '', '', 'SICAUS', 'SICAUS', NULL, 0),
(80, '2', 'Dr', 'Yunior Ram&oacute;n Vel&aacute;zquez Labrada', 'Cuba', 'Santiago de Cuba', 'C44', 'CEMZOC- UO', 'PDFs/c44-cemzocou-cub202006pdf.pdf', '', '', 'CEMZOC- UO', 'CEMZOC- UO', NULL, 0),
(81, '2', 'Ing', 'Ruben Dario Cantero Rodelo', 'Barranquilla', 'Colombia', 'C45', 'C45 EZOCOS', 'PDFs/c45-ezocos-col202010pdf.pdf', '', '', 'C45 EZOCOS', 'C45 EZOCOS', NULL, 0),
(82, '2', 'Lic', 'Hugo Hidalgo Colindres ', 'Guatemala', 'Cuidad de Guatemala', 'C46', 'CariGuat', 'PDFs/c46-cariguat-gua202006pdf.pdf', '', '', 'CariGuat', 'CariGuat', NULL, 0),
(83, '2', 'Lic', 'Juan Pablo Mari&ntilde;o Jim&eacute;nez', 'Colombia', 'Bogot&aacute;', 'C48', 'Universidad Antonio Nari&ntilde;o', 'PDFs/c48-uan-colpdf.pdf', '', '', 'Universidad Antonio Nari&ntilde;o', 'Universidad Antonio Nari&ntilde;o', NULL, 0),
(84, '2', 'Lic', 'Mario Alberto Palacios Moreno', 'Ecuador', 'Guayaquil', 'C48', 'ECUPAC', 'PDFs/c49-rpge-ecupdf.pdf', '', '', 'ECUPAC', 'ECUPAC', NULL, 0),
(85, '2', 'Dr', 'Susel Noem&iacute; Alejandre Jim&eacute;nez', 'M&eacute;xico', 'Manzanillo', 'C50', 'Por una Costa Sostenible', 'PDFs/c50-pucs-cubapdf.pdf', '', '', 'Por una Costa Sostenible', 'Por una Costa Sostenible', NULL, 0),
(86, '2', 'Lic', 'Maria Elena Gonzalez Ruelas', 'M&eacute;xico', 'Puerto Vallarta', 'C51', 'Geoecolog&iacute;a y divulgaci&oacute;n de las ciencias.', 'PDFs/c51-gydc-mexpdf.pdf', '', '', 'Geoecolog&iacute;a y divulgaci&oacute;n de las cie', 'Geoecolog&iacute;a y divulgaci&oacute;n de las cie', NULL, 0),
(87, '2', 'Lic', 'Francesco Misticoni', 'Venezuela', 'Miranda', 'C53', ' C53-UBVas de Playa', 'PDFs/c53-ubvas-van202006pdf.pdf', '', '', ' C53-UBVas de Playa', ' C53-UBVas de Playa', NULL, 0),
(88, '2', 'Dra', 'Mar&iacute;a Luj&aacute;n Bustos', 'Argentina', 'Buenos Aires', 'C56', 'BAHIA BLANCA - ARGENTINA', 'PDFs/c56-bahiablanca-arg202008pdf.pdf', '', '', 'BAHIA BLANCA - ARGENTINA', 'BAHIA BLANCA - ARGENTINA', NULL, 0),
(89, '2', 'Ing', 'Claudia D&iacute;az Mendoza', 'Colombia', 'Cartagena', 'C57', ' PSC- Playa Sostenible Cartagena', 'PDFs/c57-psc-colpdf.pdf', '', '', ' PSC- Playa Sostenible Cartagena', ' PSC- Playa Sostenible Cartagena', NULL, 0),
(90, '2', 'Dr', 'H&Eacute;CTOR ALONSO APONTE UBILL&Uacute;S', 'Per&uacute;', 'Lima', 'C58', 'U CIENTIFICA DEL SUR ', 'PDFs/c58-ucs-perpdf.pdf', '', '', 'U CIENTIFICA DEL SUR ', 'U CIENTIFICA DEL SUR ', NULL, 0),
(91, '2', 'Dr', 'EDGARDO E. DIAZ-FERGUSON', '', '', 'C59', 'ESTACION CIENTIFICA COIBA AIP', 'PDFs/c59-coibaaip-panpdf.pdf', '', '', 'ESTACION CIENTIFICA COIBA AIP', 'ESTACION CIENTIFICA COIBA AIP', NULL, 0),
(92, '2', 'Dr', 'Henando Jos&eacute; Bol&iacute;var Anillo ', 'Colombia', 'Barranquilla', 'C62', 'Calidad Ambiental de Playas del Atl&aacute;ntico -CAPA-', 'PDFs/c62-capa-colpdf.pdf', '', '', 'Calidad Ambiental de Playas del Atl&aacute;ntico -', 'Calidad Ambiental de Playas del Atl&aacute;ntico -', NULL, 0),
(93, '2', 'Lic', 'Johanna Poggi D&aacute;vila', 'Per&uacute;', 'Lima', 'C65', 'USIL', 'PDFs/c65-usil-perupdf.pdf', '', '', 'USIL', 'USIL', NULL, 0),
(94, '2', 'Dr', 'Edlin Jos&eacute; Guerra Castro', 'M&eacute;xico', 'Merida', 'C66', 'Biodiversidad Marina de Yucat&aacute;n - BDMY - UNAM', 'PDFs/c66-bmmy-mexpdf.pdf', '', '', 'Biodiversidad Marina de Yucat&aacute;n - BDMY - UN', 'Biodiversidad Marina de Yucat&aacute;n - BDMY - UN', NULL, 0),
(95, '2', 'Dr', 'Violeta Zetzangari Fern&aacute;ndez D&iacute;az', 'M&eacute;xico', 'Baja California', 'C68', 'OCEANIC - Oceanograf&iacute;a e Ingenier&iacute;a Costera', 'PDFs/c68-oceanic-mexpdf.pdf', '', '', 'OCEANIC - Oceanograf&iacute;a e Ingenier&iacute;a ', 'OCEANIC - Oceanograf&iacute;a e Ingenier&iacute;a ', NULL, 0),
(96, '2', 'Lic', '&Aacute;urea E. Rodr&iacute;guez Santiago', 'Puerto Rico', '', 'C71', 'TEPR - Taller Ecol&oacute;gico de Puerto Rico', 'PDFs/c71-tepr-pur202009pdf.pdf', '', '', 'TEPR - Taller Ecol&oacute;gico de Puerto Rico', 'TEPR - Taller Ecol&oacute;gico de Puerto Rico', NULL, 0),
(97, '2', 'Dra', 'RAQUEL DEZID&Eacute;RIO SOUTO', 'Brasil', 'Rio de Janeiro', 'C72', 'INSTITUTO VIRTUAL PARA O DESENVOLVIMENTO SUSTENT&Aacute;VEL', 'PDFs/c72-ivides-brapdf.pdf', '', '', 'INSTITUTO VIRTUAL PARA O DESENVOLVIMENTO SUSTENT&A', 'INSTITUTO VIRTUAL PARA O DESENVOLVIMENTO SUSTENT&A', NULL, 0),
(99, '2', 'Lic', 'Edelkis Rodr&iacute;guez Moya', 'Cuba', 'Costa Norte Villa Clara,', 'E27', 'CESAM Villa Clara', 'PDFs/e27-cesamvc-cub202010pdf.pdf', '', '', 'CESAM Villa Clara', 'CESAM Villa Clara', NULL, 0),
(100, '3', 'Lic', 'Seraf&iuml; Mercad&eacute;', 'M&eacute;xico', 'Paises del Caribe, Am&eacute;rica Central y Am&eac', 'E37', 'Delatorre Consulting - Beach Trotters', 'PDFs/e37-beachtrotters-esppdf.pdf', '', '', 'Delatorre Consulting - Beach Trotters', 'Delatorre Consulting - Beach Trotters', NULL, 0),
(101, '3', 'Ing', 'Pedro Odriozola Braconier', 'Espa&ntilde;a', ' Europa Oficinas San Sebastian(Espa&ntilde;a) y Vi', 'E40', 'Canicas', 'PDFs/e40-canicas-esppdf.pdf', '', '', 'Canicas', 'Canicas', NULL, 0),
(102, '3', 'Ing', 'ALFONSO SOLIS PIMENTEL', 'M&eacute;xico', 'MEXICO, BELICE, PERU, EL SALVADOR Y ECUADOR (LATIN', 'E43', 'AXISIMA', 'PDFs/e43-axisima-mex202006pdf.pdf', '', '', 'AXISIMA', 'AXISIMA', NULL, 0),
(103, '3', 'Lic', 'Sergio Enrique Vargas Ruiz', 'Colombia', 'Cove&ntilde;as', 'E47', 'URBAS-GdM', 'PDFs/e47-urbasgdm-colpdf.pdf', '', '', 'URBAS-GdM', 'URBAS-GdM', NULL, 0),
(104, '3', 'Ciudadano', 'NELSON DIAZ AGUIRRE', 'Argentina', 'Mar de plata', 'E54', 'BALNEARIOS DE MAR DEL PLATA', 'PDFs/e54-balneariosmdp-arg202102pdf.pdf', '', '', 'BALNEARIOS DE MAR DEL PLATA', 'BALNEARIOS DE MAR DEL PLATA', NULL, 0),
(105, '3', 'Mtro', 'FRANCISCO ANTONIO ESPA&Ntilde;A FERN&Aacute;NDEZ', 'M&eacute;xico', 'Cuidad De M&eacute;xico', 'E67', 'PLAYAS LIMPIAS MX', 'PDFs/e67-plmex-mexpdf.pdf', '', '', 'PLAYAS LIMPIAS MX', 'PLAYAS LIMPIAS MX', NULL, 0),
(106, '3', 'Mtro', 'MANUEL HUMBERTO GOMEZ PROANO', 'Ecuador', 'MATRIZ -GUAYAQUIL', 'E71', 'SIM ATLANTIS', 'PDFs/e71-simatlantis-ecu202009pdf.pdf', '', '', 'SIM ATLANTIS', 'SIM ATLANTIS', NULL, 0),
(107, '3', 'Lic', 'Paulo Alexandre de Sousa Fal&eacute;', 'Portugal', 'Regi&atilde;o Autonoma da Madeira', 'E73', 'Ondas Calmas - Unipessola, Lda', 'PDFs/e73-ondascalmas-por202011pdf.pdf', '', '', 'Ondas Calmas - Unipessola, Lda', 'Ondas Calmas - Unipessola, Lda', NULL, 0),
(108, '3', 'Ing', 'ANA MAR&Iacute;A CADAVIDO', 'Colombia', 'BAH&Iacute;A SOLANO', 'E75', 'ANKLA AZUL AVENTURAS MARINAS', 'PDFs/e75-anklaazul-col202109pdf.pdf', '', '', 'ANKLA AZUL AVENTURAS MARINAS', 'ANKLA AZUL AVENTURAS MARINAS', NULL, 0),
(109, '0', 'Tec', 'Luis Cesar Herrera', 'Venezuela', 'Isla de Margarita, Estado Nueva Esparta', 'E76', 'Iconoplaya', 'PDFs/e76-iconoplaya-ven202109pdf.pdf', '', '', 'Iconoplaya', 'Iconoplaya', NULL, 0),
(110, '4', 'Tec', 'RAUL SASTOQUE FRANCO', 'Colombia', 'PUERTO BOL&Iacute;VAR - LA GUAJIRA', 'F52', 'TODOS POR LA ALTA GUAJIRA', 'PDFs/f52-tpag-colpdf.pdf', '', '', 'TODOS POR LA ALTA GUAJIRA', 'TODOS POR LA ALTA GUAJIRA', NULL, 0),
(111, '4', 'Lic', 'Juan Manuel Fernandez', 'Argentina', 'Necochea-Quequ&eacute;n', 'F63', 'Necochea', 'PDFs/f63-necocheapdf.pdf', '', '', 'Necochea', 'Necochea', NULL, 0),
(112, '4', 'Lic', ' Ricardo Alberto D Annunzio', 'Argentina', 'Municipio de Tres Arroyos', 'F64', 'TRES ARROYOS', 'PDFs/f64-tresarroyos-argpdf.pdf', '', '', 'TRES ARROYOS', 'TRES ARROYOS', NULL, 0),
(120, '3', 'Mtro', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', '', '', '', 'Admin45', 'Integrante', 'prueba@utem.edu.mx', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id_correo` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `asunto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(1200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_correo`, `nombre`, `asunto`, `correo`, `pais`, `mensaje`, `estado`, `fecha`) VALUES
(31, 'Prueba', 'Prueba', 'prueba@gmail.com', 'Mexico', 'Cabo San Lucas es un balneario en el extremo sur de la pen&iacute;nsula de Baja California en M&eacute;xico, conocido por sus playas, actividades acu&aacute;ticas y vida nocturna. La Playa El M&eacute;dano es la principal del Cabo, con restaurantes al aire libre y numerosos bares. Despu&eacute;s de la marina, se encuentra el promontorio del Fin de la Tierra, donde est&aacute; la Playa del Amor y El Arco, una arcada natural en los riscos marinos', 1, '2022-08-11 13:54:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `roles`) VALUES
(0, 'Nodos'),
(1, 'Admin'),
(2, 'Integrantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tnodo`
--

CREATE TABLE `tnodo` (
  `idtiponodo` int(11) NOT NULL,
  `tnodo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tnodo`
--

INSERT INTO `tnodo` (`idtiponodo`, `tnodo`) VALUES
(1, 'ACTIVISTA / SOCIEDAD CIVIL'),
(2, 'CIENTIFICO'),
(3, 'EMPRESARIAL'),
(4, 'FUNCION PUBLICA ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `webinars`
--

CREATE TABLE `webinars` (
  `id_wbns` int(11) NOT NULL,
  `fkid_nodo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `resumen` varchar(1200) NOT NULL,
  `autor_wbns` varchar(50) NOT NULL,
  `codigoWbs` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `pdf` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `webinars`
--

INSERT INTO `webinars` (`id_wbns`, `fkid_nodo`, `titulo`, `subtitulo`, `resumen`, `autor_wbns`, `codigoWbs`, `fecha`, `hora`, `pdf`, `img`) VALUES
(4, 1, 'Prueba', 'Prueba', 'CABO SAN LUCAS ES UN BALNEARIO EN EL EXTREMO SUR DE LA PEN&amp;IACUTE;NSULA DE BAJA CALIFORNIA EN M&amp;EACUTE;XICO, CONOCIDO POR SUS PLAYAS, ACTIVIDADES ACU&amp;AACUTE;TICAS Y VIDA NOCTURNA. LA PLAYA EL M&amp;EACUTE;DANO ES LA PRINCIPAL DEL CABO, CON RESTAURANTES AL AIRE LIBRE Y NUMEROSOS BARES. DESPU&amp;EACUTE;S DE LA MARINA, SE ENCUENTRA EL PROMONTORIO DEL FIN DE LA TIERRA, DONDE EST&amp;AACUTE; LA PLAYA DEL AMOR Y EL ARCO, UNA ARCADA NATURAL EN LOS RISCOS MARINOS.', 'Admin', '00', '2022-08-08', '11:54:42', 'PDFs/cabospdf.pdf', ' Utilidades/cabosjpg.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `webserie`
--

CREATE TABLE `webserie` (
  `id_wbs` int(11) NOT NULL,
  `fkid_nodo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenidoWbs` varchar(1200) NOT NULL,
  `videowbs` varchar(500) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `autor_wbs` varchar(50) NOT NULL,
  `codigoWbs` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `numC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `webserie`
--

INSERT INTO `webserie` (`id_wbs`, `fkid_nodo`, `titulo`, `contenidoWbs`, `videowbs`, `imagen`, `autor_wbs`, `codigoWbs`, `fecha`, `hora`, `numC`) VALUES
(5, 1, 'Prueba', 'Cabo San Lucas es un balneario en el extremo sur de la pen&iacute;nsula de Baja California en M&eacute;xico, conocido por sus playas, actividades acu&aacute;ticas y vida nocturna. La Playa El M&eacute;dano es la principal del Cabo, con restaurantes al aire libre y numerosos bares. Despu&eacute;s de la marina, se encuentra el promontorio del Fin de la Tierra, donde est&aacute; la Playa del Amor y El Arco, una arcada natural en los riscos marinos.', 'https://www.youtube.com/embed/Rb4Q-PfUVgk', 'Utilidades/welcome-to-the-junglejpg.jpeg', 'Admin', '00', '2022-06-29', '12:31:03', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`id_inte`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `nodos`
--
ALTER TABLE `nodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id_correo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tnodo`
--
ALTER TABLE `tnodo`
  ADD PRIMARY KEY (`idtiponodo`);

--
-- Indices de la tabla `webinars`
--
ALTER TABLE `webinars`
  ADD PRIMARY KEY (`id_wbns`);

--
-- Indices de la tabla `webserie`
--
ALTER TABLE `webserie`
  ADD PRIMARY KEY (`id_wbs`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=699;

--
-- AUTO_INCREMENT de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `id_inte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nodos`
--
ALTER TABLE `nodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tnodo`
--
ALTER TABLE `tnodo`
  MODIFY `idtiponodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `webinars`
--
ALTER TABLE `webinars`
  MODIFY `id_wbns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `webserie`
--
ALTER TABLE `webserie`
  MODIFY `id_wbs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
