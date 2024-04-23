-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardware_den`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `woym` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_number`, `woym`) VALUES
(1, 'Test', 'Test@gmail.com', 982901812, 'Test Message'),
(5, 'Neeta Sharma', 'neetasharma2007@rediffmail.com', 2147483647, 'Wanted to inquire about The RTX 4060 Availability');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `laptop_id` int(11) NOT NULL,
  `manufacturer` varchar(60) NOT NULL,
  `model_name` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `screen_size` decimal(11,0) NOT NULL,
  `screen_reso` varchar(50) NOT NULL,
  `panel_type` varchar(150) NOT NULL,
  `cpu_brand` varchar(25) NOT NULL,
  `cpu_series` varchar(25) NOT NULL,
  `cpu_name` varchar(50) NOT NULL,
  `cpu_speed` double NOT NULL,
  `gpu_type` varchar(25) NOT NULL,
  `gpu_brand` varchar(50) NOT NULL,
  `gpu_series` varchar(50) NOT NULL,
  `vram` int(11) NOT NULL,
  `ram_size` int(11) NOT NULL,
  `ram_speed` int(11) NOT NULL,
  `storage_type` varchar(250) NOT NULL,
  `storage_size` int(11) NOT NULL,
  `os` varchar(250) NOT NULL,
  `weight` double NOT NULL,
  `price` double NOT NULL,
  `no_of_rating` int(11) NOT NULL,
  `no_of_reviews` int(11) NOT NULL,
  `display_image` longtext NOT NULL,
  `carousel_images` longtext NOT NULL,
  `desc_images` longtext NOT NULL,
  `release_year` year(4) NOT NULL,
  `about` longtext NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`laptop_id`, `manufacturer`, `model_name`, `category`, `screen_size`, `screen_reso`, `panel_type`, `cpu_brand`, `cpu_series`, `cpu_name`, `cpu_speed`, `gpu_type`, `gpu_brand`, `gpu_series`, `vram`, `ram_size`, `ram_speed`, `storage_type`, `storage_size`, `os`, `weight`, `price`, `no_of_rating`, `no_of_reviews`, `display_image`, `carousel_images`, `desc_images`, `release_year`, `about`, `stock`) VALUES
(1, 'Apple', 'MacBook Pro', 'Ultrabook', 13, '2560x1600', 'Liquid Retina Display', 'Apple', 'M2', 'Ultra', 2.3, 'Integrated', '', '', 0, 8, 2133, 'SSD', 128, 'macOS', 1.37, 109900, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222517742062534756/c719531606218950ad67c10472083cf1.png?ex=6616815e&is=66040c5e&hm=3bfc74cef60a89cc8dafa063dd727a89a3f481e14a5fed572b753564da6181aa&=&format=webp&quality=lossless&width=701&height=701', 'https://cdn.discordapp.com/attachments/1223253278330978405/1223253368189882439/81Fm0tRFdHL._SL1500_.jpg?ex=66192e79&is=6606b979&hm=42c9241ae97e10a4e71a085f26b05fe9ac77f65f45504ec18fbb51c123cd9c31&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223253370710655087/7105Rld2JtL.png?ex=66192e7a&is=6606b97a&hm=ff542c07bc61ca90b657b53a9090a70d684054b5235cf82ba5b41acde59b96e8&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223253368894390312/81hrEND4QvL.png?ex=66192e7a&is=6606b97a&hm=084b5f3102484e24938bdc5a7893a1a818fdf72a3cfba1c891f56006d7965c39&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223253370253344818/814p9bhEntL.png?ex=66192e7a&is=6606b97a&hm=da3d8b8d5531e278ce9d20d84d64a77374018c2c4c943bfba815deb4f15533ff&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223253369720803379/91LJAKgO0ML.png?ex=66192e7a&is=6606b97a&hm=db371dd0a02066fb08ad45fd38c21c85a7006b1ff1f7aca43ffc21d6588fd3b7&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223253367632035890/71yTl4iE35L.png?ex=66192e79&is=6606b979&hm=653831ffe4a9e6efd42126b703fdae8f4a39fe4ae2a8c5e3101907a007b03b1c&', 'https://cdn.discordapp.com/attachments/1223253278330978405/1223599620064546829/Macbook_Pro_M3_Desktop__en-IN_01.png?ex=661a70f2&is=6607fbf2&hm=3dadb04096a5ea729ffa9e0899631bf700287703151be9de53810fd9aca3876c&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223599620458938459/Macbook_Pro_M3_desk_en-IN_02.png?ex=661a70f2&is=6607fbf2&hm=dae7ab1e5dc1a0d0735bf1540b034acd50402f4e5a79821585011573121298e9&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223599620806938724/Macbook_Pro_M3_desk_en-IN_03.png?ex=661a70f2&is=6607fbf2&hm=0aade7e3460fc078c8504046a5fa7186ab920cf362c1fca6d94165e27abd9e58&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223599621251661914/Macbook_Pro_M3_Desk_en-IN_04.png?ex=661a70f3&is=6607fbf3&hm=6fad604a806b0f155c85032d125a5c9af76d257020397a0123d9776425650555&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223599621520228352/Macbook_Pro_M3_desk_en-IN_05.png?ex=661a70f3&is=6607fbf3&hm=7f2f995d0587031b60fa1925fc2f265163ba4eda548968b340422cb2898ccc66&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223599621771628554/Macbook_Pro_M3_desk_en-IN_06.png?ex=661a70f3&is=6607fbf3&hm=b2ad2e3b8737b471a497026164797937d1c75d86552ba8a268463925d89eba71&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223602396673085440/Macbook_Pro_M3_desk_en-IN_07.png?ex=661a7388&is=6607fe88&hm=5912d44cd856aeeb4ecc6c2df51097b23b984e64b438b1fa175202de14c6c4d7&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223599622451363891/Macbook_Pro_M3_desk_en-IN_08.png?ex=661a70f3&is=6607fbf3&hm=3e1d8f36ad7e387b5b2e41097bb459f68d0e85444a4d51816dcd6f260338cd4c&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223599622912479303/Macbook_Pro_M3_desk_en-IN_09.png?ex=661a70f3&is=6607fbf3&hm=211f269786fff129767422cb80780595d60c61770858eb331a2edb93d1e2db50&', '2023', 'SUPERCHARGED BY M3 — With an 8-core CPU and 10-core GPU using hardware-accelerated ray tracing, the Apple M3 chip can help you blaze through everyday multitasking and take on pro projects like editing thousands of photos or 4K video.\r\nUP TO 22 HOURS OF BATTERY LIFE — Go all day thanks to the power-efficient design of Apple silicon. MacBook Pro delivers the same exceptional performance whether it’s running on battery or plugged in.\r\nRESPONSIVE UNIFIED MEMORY AND STORAGE — Up to 24GB of unified memory makes everything you do fast and fluid. Up to 2TB of superfast SSD storage launches apps and opens files in an instant.\r\nBRILLIANT PRO DISPLAY — The 35.97 cm (14.2″) Liquid Retina XDR display features Extreme Dynamic Range; 1,000 nits of sustained brightness for stunning HDR content; up to 600 nits of brightness for SDR content; and pro reference modes for doing your best work on the go.\r\nFULLY COMPATIBLE — All your pro apps run lightning-fast — including Adobe Creative Cloud, Apple Xcode, Microsoft 365, Medivis SurgicalAR, and many of your favorite iPhone and iPad apps. And with macOS, work and play on your Mac are even more powerful. Elevate your presence on video calls. Access information in all-new ways. And discover even more ways to personalize your Mac.\r\nADVANCED CAMERA AND AUDIO — Look sharp and sound great with a 1080p FaceTime HD camera, a studio-quality three-mic array, and a six-speaker sound system with Spatial Audio.\r\nCONNECT IT ALL — This MacBook Pro features a MagSafe charging port, two Thunderbolt / USB 4 ports, an SDXC card slot, an HDMI port, and a headphone jack. Enjoy fast wireless connectivity with Wi-Fi 6E and Bluetooth 5.3. Supports one external display.\r\nMAGIC KEYBOARD WITH TOUCH ID — The backlit Magic Keyboard has a full-height function key row and Touch ID, which gives you a fast, easy, secure way to unlock your laptop and sign in to apps and sites.\r\nADVANCED SECURITY — Every Mac comes with encryption, robust virus protections, and a powerful firewall system. And free security updates help keep your Mac protected.\r\nWORKS WITH ALL YOUR APPLE DEVICES — You can do amazing things when you use your Apple devices together. Copy something on the iPhone and paste it on the MacBook Pro. Use your MacBook Pro to answer FaceTime calls or send texts with Messages. And that’s just the beginning.', 4),
(3, 'HP', 'Smartchoice 14s', 'Notebook', 14, '1920x1080', 'IPS Anti-Glare FHD', 'Intel', 'i3', '1125G4', 4.1, 'Integrated', 'Intel', 'UHD Graphics', 512, 8, 3200, 'SSD NVMe M.2', 512, 'Windows 11 Home', 1.41, 32990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222542674716921906/269904_0_fxgoip.png?ex=66169897&is=66042397&hm=1f8157d7a04087cb56b8039f17ab787645894edc72ed3f9d82c3da47c28e8dbd&=&format=webp&quality=lossless&width=701&height=701', 'https://cdn.discordapp.com/attachments/1223253278330978405/1223609219849388133/71beRaCiESL.png?ex=661a79e3&is=660804e3&hm=033276093fb9cb736646e709566e4659bc56bcd05386f947119e3bba1c644bac&', '', '2022', 'Processor: 11th Gen Intel Core i3-1115G4 (up to 4.1 GHz with Intel Turbo Boost Technology, 6 MB L3 cache, 2 cores, 4 threads)\r\nMemory & Storage: 8 GB DDR4-3200 MHz RAM (1 x 8 GB)| Storage: 512 GB SSD PCIe NVMe M.2 SSD\r\nDisplay: 35.6 cm (14\") diagonal, FHD (1920 x 1080), IPS, micro-edge, BrightView, 250 nits, 45% NTSC\r\nGraphics & Networking: Intel UHD Graphics | Realtek RTL8822CE 802.11a/b/g/n/ac (2x2) Wi-Fi and Bluetooth 5 combo\r\nOperating System & Software: Pre-installed Windows 11 Home| Pre-installed Microsoft Office Home & Student\r\nIn an unlikely case of a product quality-related issue, we may ask you to reach out to the brand’s customer service support and seek a resolution. We will require brand proof of issue to process the replacement request.\r\nWhy HP? What is good for the planet, is good for technology and good for us. Technology must be mindful of the environment and HP believes in sustainability.\r\nReplacement will be done as per HP Policy after confirmation with the Service Center.', 7),
(4, 'Asus', 'Vivobook 14', 'Ultrabook', 14, '1920x1080', 'IPS FHD', 'Intel', 'i3', '1115G4', 3, 'Integrated', 'Intel', 'UHD Graphics', 512, 8, 3200, 'SSD NVMe M.2', 512, 'Windows 11 Home', 1.6, 29990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222543031081762887/31736f29-2307-4583-b887-a9fc5a85f259.png?ex=661698ec&is=660423ec&hm=0a0fb30654f72d90a659af1c7104892bdcfa3af34ccad3706f1c2918072a85af&=&format=webp&quality=lossless&width=350&height=350', 'https://cdn.discordapp.com/attachments/1223253278330978405/1223611059407949896/71qTbS09tjL.png?ex=661a7b9a&is=6608069a&hm=19ddd393aa4406a64bc45c597a88431f93b91102503eaf55cf2c9afd8237c875&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223611059722780743/71f3dhJRWbL.png?ex=661a7b9a&is=6608069a&hm=5d8538827c7c9f401ef75f5533067d05563fd2078e1f69342cd376a6385cda0e&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223611059999477891/71YhFB1ySQL.png?ex=661a7b9a&is=6608069a&hm=62e05c92fc27825fd16494fcd6a1d1b4f62062819578e1d4e7c31e363a7dc773&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223611060267782184/715986jDaFL.png?ex=661a7b9a&is=6608069a&hm=273f7c6857877e992ae42fe34e9bed70ddbe927077d5a8ed76c0a46701ac0e0f&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223611060632944751/81jlue4vzHL.png?ex=661a7b9a&is=6608069a&hm=83307347e56ba2c3d6cad31bc7cdbed310dd9801ca221a79e6444e54184068ff&', 'https://cdn.discordapp.com/attachments/1223253278330978405/1223610746068271174/image.png?ex=661a7b4f&is=6608064f&hm=9834d9cd8c139eecc6b609a80c46b23c9c56c11f315b7bd79b8aaf7d28c1a50f&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223610808727240774/image.png?ex=661a7b5e&is=6608065e&hm=e9bac72939e54ab6e7d5c8f59a36f0d5183d2ecfb6a19c6b5cf7a427b9346c53&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223610849256800306/image.png?ex=661a7b68&is=66080668&hm=5f351a22b876cc7eadc4c3eab4c05c40eac51cd77e9a7e4a4ab5f6f1e8218460&', '2022', 'Processor: IntelCore i3-1215U Processor 1.2 GHz (10M Cache, up to 4.4 GHz, 6 cores)\r\nMemory: 8GB DDR4 3200MHz on board with | Storage: 512GB M.2 NVMe PCIe 4.0 SSD\r\nGraphics: Integrated Integrated Intel Iris Xe Graphics\r\nOperating System: Windows 11 Home with lifetime validity | Software Included: Pre-Installed Office Home and Student 2021 | 1-Year McAfee Anti-Virus\r\nKeyboard: Chiclet Keyboard\r\nDisplay: 14.0-inch (35.56 cms), FHD (1920 x 1080) 16:9 aspect ratio, 60Hz Refresh Rate, IPS-Level Panel\r\nI/O Port: 1x USB 2.0 Type-A, 1x USB 3.2 Gen 1 Type-C, 2x USB 3.2 Gen 1 Type-A, 1x HDMI 1.4, 1x 3.5mm Combo Audio Jack, 1x DC-in\r\nDesign: 1.79 ~ 1.79 cm Thin | Thin & Light Laptop | 1.40 kg | 42WHrs Battery Capacity Up to 6 hours Battery life, Note: Battery life depends on conditions of usage', 9),
(5, 'HP ', 'Victus Gaming', 'Gaming', 16, '1920x1080', 'IPS FHD 144Hz', 'Intel', 'i5', '12450H', 2.5, 'Dedicated', 'Nvidia', 'GeForce RTX 3050 Laptop', 4096, 16, 3200, 'SSD NVMe M.2', 512, 'Windows 11 Home', 2.29, 69599, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222543262640767028/21-c-1-victus-taffyta-16-60-w-lcd-mica-silver-nt-h-dcam-non-odd-freedos-core-set-front-copy.png?ex=66169923&is=66042423&hm=6f1e1697e76a01af989ede56440c7928b3991918955330d72db4b817b8995a83&=&format=webp&quality=lossless&width=404&height=350', 'https://cdn.discordapp.com/attachments/1223253278330978405/1223612121007259678/81c1f4CYsJL.png?ex=661a7c97&is=66080797&hm=8292f585c78f76711b2a742f0714f362d436e114fdd616c4b8de8cce65d849dc&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612121632473169/71mu9GLMuHL.png?ex=661a7c97&is=66080797&hm=efd7d74802987252b85fc59a591733fdd921802f88a260b2f3367ebe37b38dfd&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612121909166121/81WK-1ZIinL.png?ex=661a7c97&is=66080797&hm=2fb73a619d831a5dfbfe6d7b00546e1bacae564be3bbad95d261d4df344270d4&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612122475266233/81tJ64p4J-L.png?ex=661a7c97&is=66080797&hm=52bcfbeb57aa8a339d7f43fc88af800e1fcbfb30db37ac0e944c252afbb51173&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612122836238406/81FZIonVdzL.png?ex=661a7c97&is=66080797&hm=b3d39227daa012be669bb34d27534a9641ec22ab6726ec247053138bd37d0a70&', 'https://cdn.discordapp.com/attachments/1223253278330978405/1223612757866451014/b337d8a5-f3cd-45bd-8f71-355d9844ba1c.png?ex=661a7d2f&is=6608082f&hm=7ad40f8f3069baf0eae9d2abeff8d629e5845ce758b04dc0e63e0343651bf410&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612758163984404/82c39948-d2ea-4538-85ff-77ec67a8fbc8.png?ex=661a7d2f&is=6608082f&hm=9f992530fbd35dd123f2d601f10a935fdaebc31afca83bb315f9688dfb74b56f&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612759049113701/7a05e23b-8201-4e19-864e-3161fc06f62b.png?ex=661a7d2f&is=6608082f&hm=305d37f68d3a156c84bd6336d7fbc58a5be683c1bda7dfb90764565307a739c6&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612759493840957/fc37ee56-1b5a-418f-b559-892234856907.png?ex=661a7d2f&is=6608082f&hm=adf517bbeb53b904f6926b7a785d0d58c49626f4a1f748146d4b89434cf59068&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612759833317396/4ec7dd01-9b06-43b2-90b1-fbc12a8fc9c2.png?ex=661a7d2f&is=6608082f&hm=11be5aa5aadc34c68e2baa9187f24f1d629bf0433667a77084c97563d23930dd&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612760437428325/0ecec9eb-e794-4837-927c-a2454c81438e.png?ex=661a7d2f&is=6608082f&hm=7d511443d14c99cca40e1e5e5d42a074c7fd3a3018f109f58c8d6c3b1f4f0fa1&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223612760936681482/29190740-8bf0-4a23-bc83-87020677f676.png?ex=661a7d2f&is=6608082f&hm=ffae841160bc09f4c46038744eb169bfd062baa20572bd4a7a5db81dc10521d9&', '2023', '【8-core 12th Gen Intel Core i5-12450H】12 threads and 12MB L3 cache set you up to conquer virtual battlefields with superior processing speeds, with updated thermals to keep things cool.\r\n【4GB NVIDIA GeForce RTX 3050 Laptop GPU】Unlock an immersive gaming experience with graphics that deliver AI-accelerated performance, enhanced 3D rendering, and hyper-efficient data processing.\r\n【High-speed memory and storage】512GB PCIe Gen4 NVMe TLC M.2 SSD provides a lag-free experience for smooth gameplay. The 16GB DDR4 RAM helps you run memory-intensive gaming applications with ease.\r\n【Popular games】Enjoy all your favorite games like Call of Duty, GTA V, Cyberpunk 2077, World of Warcraft, Minecraft, The Witcher 3, God of War 4, FIFA 23, Gotham Knights, and more.\r\n【Micro-edge display】Experience gaming like never before on a 15.6\" FHD micro-edge display with a rapid 144Hz refresh rate. High-resolution visuals and crisp detail keep you immersed in the game.\r\n【Effortless connectivity】Stay connected with Wi-Fi 6 (2x2) and Bluetooth 5.3 wireless card. The laptop also features 1 x USB Type-C, 2 x USB Type-A, 1 x HDMI 2.1, and 1 x RJ-45 ports.\r\n【Extended battery life】With a 3-cell, 52.5Wh battery, enjoy extended gaming sessions without worrying about charging. Be always ready for the next level with a fast charge of up to 50% in 30 minutes.\r\n【Collaborative gaming】With an HP Wide Vision 720p HD camera, integrated dual array digital microphones, and audio by B&O, team up for multiplayer sessions without any hassle.\r\n【Pre-loaded Win 11 and MS Office】The laptop comes pre-loaded with Windows 11 Home and MS Office. Follow the Office Activation Wizard to get started with MS Office.\r\n【Sustainable choice】The laptop design includes ocean-bound plastic and post-consumer recycled plastic. It is also EPEAT Silver registered and ENERGY STAR certified.', 9),
(6, 'Asus', 'ZenBook UX430UN', 'Ultrabook', 14, '1920x1080', 'VA FHD', 'Intel', 'i7', '8550U', 1.8, 'Integrated', 'Nvidia', 'MX150', 256, 8, 2400, 'SSD', 512, 'Windows 10 Home', 1.3, 58999, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222544442402279434/dc960661-0bcf-4674-9f5c-7c2ccdcd7cb1.png?ex=66169a3c&is=6604253c&hm=eab6426d8fc37bc955ffdffa1c41b74a482356ccac04bd5f624edbe3fdeed1fb&=&format=webp&quality=lossless&width=350&height=350', 'https://m.media-amazon.com/images/I/414VtE2BquL.jpg\r\nhttps://m.media-amazon.com/images/I/51uwUH7AQ2L.jpg\r\nhttps://m.media-amazon.com/images/I/41ndj5TFzmL.jpg\r\nhttps://m.media-amazon.com/images/I/91inslOlACL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/31jcwHXGsQL.jpg', '', '2018', 'IntelÂ CoreTM i7-8550U processor 1.8 GHz Turbo Boost up to 4.GHz and 4MB\r\n8GB DDR4 RAM, 512GB SSD\r\n14.1\" Full HD IPS Screen (1920x1080), NVIDIAÂ GeForceÂ MX150 2GB Graphics\r\n1 x Type-CTM USB 3.1 Gen 1 / 1 x Type-A USB 3.1 Gen 1 / 1 x USB 2.0 / 1 x Micro HDMI /\r\nWindows 10 Home / Finger Print Reader / Backlit Keyboard / 2 Year Onsite Warranty / Grey Color\r\nCountry of Origin: China\r\nZenBook has always been a different kind of ultraportable laptop, but the elegant and sophisticated ZenBook UX430 is a new kind of different: we\'ve crafted a travel-friendly 33.02cm(13) ZenBook with a work-friendly 35.56cm(14) display! For the first time ever, you don\'t have to make the difficult choice between portability and screen size - the incredible ZenBook UX430 achieves the impossible by delivering both! Its slim and lightweight design, iconic ZenBook styling, and high-performance components make ZenBook UX430 the take-anywhere powerhouse you won\'t want to leave behind, wherever you go. Take more with you, in less space! ZenBook UX430 is designed to go wherever your busy lifestyle takes you - whether it\'s a hectic round of meetings, a crammed international schedule, or a well-deserved vacation. Its sleek and compact 33.02cm(13) chassis is a briefcase-friendly 15.9mm thick, and its advanced lightweight construction keeps the weight down to just 1.25 kg - so it\'ll never be a burden when you\'re on the go.The ZenBook series is renowned for superb display quality, and ZenBook UX430 is no exception. Its 35.56cm(14) anti-glare display has an ultra-wide 100% sRGB color gamut, which means it can display more-accurate and more-vivid colors than a standard display. It also uses wide-view technology to ensure that contrast and color reproduction are not degraded at viewing angles up to 178Â° degrees, making it perfect for collaboration and screen sharing.', 9),
(7, 'Dell', 'G15-5520', 'Gaming', 16, '1920x1080', 'FHD WVA AG 120Hz', 'Intel', 'i5', '12500H', 4.5, 'Dedicated', 'Nvidia', 'GeForce RTX 3050 Laptop', 4096, 16, 4800, 'SSD NVMe M.2', 1024, 'Windows 11 Home', 2.81, 75990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222544698321932309/273309_oi32ro.png?ex=66169a79&is=66042579&hm=88b38eaa5b268b7b2966aa9cdf4f8d02a89a489753707fbd7160ca88f1dc6ad9&=&format=webp&quality=lossless&width=350&height=350', 'https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/g-series/g15-5520/media-gallery/g15-5520-bk-coralkb/notebook-g-15-5520-gallery-1.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=457&qlt=100,1&resMode=sharp2&size=457,402&chrss=full\r\nhttps://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/g-series/g15-5520/media-gallery/g15-5520-bk-coralkb/notebook-g-15-5520-gallery-9.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=455&qlt=100,1&resMode=sharp2&size=455,402&chrss=full\r\nhttps://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/g-series/g15-5520/media-gallery/g15-5520-bk-coralkb/notebook-g-15-5520-gallery-2.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=516&qlt=100,1&resMode=sharp2&size=516,402&chrss=full\r\nhttps://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/g-series/g15-5520/media-gallery/g15-5520-bk-coralkb/notebook-g-15-5520-gallery-3.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=612&qlt=100,1&resMode=sharp2&size=612,402&chrss=full\r\nhttps://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/g-series/g15-5520/media-gallery/g15-5520-bk-coralkb/notebook-g-15-5520-gallery-6.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=390&qlt=100,1&resMode=sharp2&size=390,402&chrss=full\r\nhttps://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/g-series/g15-5520/media-gallery/g15-5520-bk-coralkb/notebook-g-15-5520-gallery-7.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=1052&qlt=100,1&resMode=sharp2&size=1052,402&chrss=full\r\nhttps://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/g-series/g15-5520/media-gallery/g15-5520-bk-coralkb/notebook-g-15-5520-gallery-8.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=505&qlt=100,1&resMode=sharp2&size=505,402&chrss=full', 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/25b821ba-7607-4fbe-9bd0-f249c0127876.__CR0,0,970,600_PT0_SX970_V1___.jpg\r\nhttps://m.media-amazon.com/images/S/aplus-media-library-service-media/ede7829f-8267-4592-9eaf-dcf67b4e3ea3.__CR0,0,970,600_PT0_SX970_V1___.jpg\r\nhttps://m.media-amazon.com/images/S/aplus-media-library-service-media/06cf5817-3036-45eb-85db-0908af24293b.__CR0,0,970,600_PT0_SX970_V1___.jpg', '2023', 'Processor : 12th Gen Intel Core i5-12500H | Up to 4.50 Ghz | 12 cores | 16 Threads | 18 MB Cache | 45 W TDP // Memory : 16 GB, 2 x 8 GB, DDR5, 4800 MHz // Storage : 512 GB SSD\r\nDisplay: 15.6\" FHD 1920 x 1080 WVA, Non-Touch, Anti-Glare| 120 Hz ( 9ms ) | 250 nits | 45% NTSC\r\nGraphics: NVIDIA GeForce RTX 3050 4 GB GDDR6 with max 90 W TGP\r\nCooling: Alienware-inspired thermal design features optimal cooling thanks to dual air-intake, copper pipes , two fans with ultra-thin blades and four strategically-placed vents. As a result, you can expect your system to stay cool when the action heats up enabling 100/100 CPU GPU concurrency and TDP up to 125 W (45W + 80 W)\r\nKeyboard and Battery: US English Orange Qwerty Backlit Keyboard with Numeric Keypad and G-Key |3 Cell, 56 Wh, integrated\r\nSoftware: Pre-Loaded Windows 11 Home with Lifetime Validity | MS Office Home and Student 2021 with lifetime validity| McAfee Multi Device Security 15-month subscription\r\nWarranty: 1Yr In-Home Hardware Service\r\nPorts: SuperSpeed USB 3.2 Gen 1, SuperSpeed USB 3.2 Gen 1, USB Type-C port with DisplayPort with alt mode, SuperSpeed USB 3.2 Gen 1, HDMI 2.1, Power in, RJ45, Headphones/mic\r\nAudio & Camera |Connectivity: Dolby Audio + HD RGB camera | Intel Wi-Fi 6 AX201, 2x2, 802.11ax, Bluetooth wireless card\r\nPower Adaptor: 180W AC Adapter', 10),
(8, 'Asus', 'TUF Gaming F15', 'Gaming', 16, '1920x1080', 'IPS FHD 144Hz', 'Intel', 'i5', '11400H', 2.7, 'Dedicated', 'Nvidia', 'GeForce RTX 2050 Laptop', 4096, 16, 3200, 'SSD', 512, 'Windows 10 Home', 2.3, 52990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222544894292267129/f93bdd99-47d7-4f97-8800-5a83d0bd46a6.png?ex=66169aa8&is=660425a8&hm=1904629e42f8a8f85f3710d56f37adbf6eff79bdd3b91cdcfeb3e9b3d02ab3de&=&format=webp&quality=lossless&width=350&height=350', 'https://m.media-amazon.com/images/I/81UWgnVKDBL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/81x9vxrPFwS._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71+cOkS8xWL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61WbJrVCbpL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61fKCsXpfWL._SX679_.jpg', 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/adbb7a25-b05c-4ca6-9fc7-f51931645794.__CR0,0,1940,1200_PT0_SX970_V1___.jpg\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223616120502882475/image.png?ex=661a8050&is=66080b50&hm=c0a6d247cc4066d588747464ea2b3c1215c3c01168119ed4f73e9bb3f008ee37&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223616121383682188/image.png?ex=661a8051&is=66080b51&hm=783e287c0a5f63070367fe8e50277246dfadae1087e37c2346112bd2afb7e0b1&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223616121739939851/image.png?ex=661a8051&is=66080b51&hm=49904dbcf010c1a7bf8f3a2d2d737394f51e075a811ea80f50f995b659493840&', '2023', 'Processor: Intel Core i5-11400H Processor 2.7 GHz (12M Cache, up to 4.5 GHz, 6 Cores)\r\nPlay over 100 high-quality PC games, plus new and upcoming blockbusters on day one like Halo Infinite, Forza Horizon 5, and Age of Empires IV with your new FX506HC-HN089WS and one month of Game Pass-including EA Play\r\nWith new games added. Age of Empires IV, Back 4 Blood, Battlefield V, Forza Horizon 5, Halo Infinite*, Knockout City, Microsoft Flight Simulator, Minecraft PC Bundle, Need for Speed Heat, Psychonauts2, The Sims 4, Titanfall 2, 12 Minutes\r\nMemory: 8GB (8GB DDR4 SO-DIMM) DDR4 3200 MHz Support Up to 32GB 2x SO-DIMM slots with | Storage: 512GB PCIe 3.0 NVMe M.2 SSD with additional 2x M.2 Slot for SSD Storage expansion\r\nDisplay: 15.6 inch (39.62 cms) FHD (1920 x 1080) 16:9 250nits, 144Hz Refresh Rate, vIPS-level Anti-glare display, Contrast Ratio: 1000:1 with Adaptive-Sync\r\nGraphics: NVIDIA GeForce RTX 3050 4GB GDDR6 VRAM with Up to 1600MHz at 60W (75W with Dynamic Boost)\r\nOperating System: Windows 11 Homewith Lifetime Validity | Software Included: Pre-installed Office Home and Student with Lifetime Validity\r\nKeyboard: Backlit Chiclet Keyboard 1-Zone RGB\r\nDesign: 2.28 ~ 2.45 cm Thin | 90WHrs, 4S1P, 4-cell Li-ion | Up to 14.7 hours battery life; Note: Battery life depends on conditions of usage\r\nI/O Port: 1x RJ45 LAN port, 3x USB 3.2 Gen 1 Type-A, 1x Thunderbolt 4 support DisplayPort | 1x HDMI 2.1 TMDS | 1x 3.5mm Combo Audio Jack', 10),
(9, 'HONOR', 'MagicBook X14', 'Notebook', 14, '1920x1080', 'IPS Anti-Glare FHD', 'Intel', 'i5', '12450H', 2, 'Integrated', 'Intel', 'UHD Graphics', 512, 16, 3200, 'SSD NVMe PCIe', 512, 'Windows 11 Home', 1.43, 54990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222545136844673034/428_428_FBA083DC6E91B772E9607A121CDCC313C33A61EAB2C92D30mp.png?ex=66169ae2&is=660425e2&hm=8b01a99c2ea583318b2fc885f39c7807e2c5053fc02fbaf317981c223a642676&=&format=webp&quality=lossless', 'https://m.media-amazon.com/images/I/71lMEeDJhuL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71jSA0Q88iL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/81FilDMqLhL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/81GezhVdE7L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71wk45LfrhL._SX679_.jpg', 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/7897025e-4e88-4146-bca7-fd0264fab5cf.__CR0,0,1940,1200_PT0_SX970_V1___.jpg\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223617090720759871/image.png?ex=661a8138&is=66080c38&hm=329bda3fb1057ce64a02c8f79a9bb076ef6271dea451a089236e6cc4f983769d&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223617091081474088/image.png?ex=661a8138&is=66080c38&hm=a8555135b013b7a663b3bb7dbffdd19b3b746d74d044ab1b998c76fcf122d056&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223617091488448624/image.png?ex=661a8138&is=66080c38&hm=2e66fdd3fd66e19463442d052a73e63703d6128ed8f48e6b7b37416801dbc17f&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223617091756752936/image.png?ex=661a8138&is=66080c38&hm=81465add12892aaea7b5aca9b293bf0e4cb64e986c7390212b4d00ff2fd29e87&', '2023', '【Fast Speed Laptop】 12th Gen Intel Core i5-12450H Processor, 2.0 GHz base speed, 4.4 GHz Max Speed, 8 Cores, 12 Threads | Intel UHD Graphics. 8GB LPDDR4x RAM & 512GB PCIe NVMe SSD, making it perfect for your office and study need\r\n【 Stylish Appearance】Honor Magicbook X14 (2023) has Premium Aluminium Metal Body with 16.5MM Thickness, 4.5 MM Left, Right Narrow Bezels and the weight of the laptop is only 1.4kg, which allows you to carry it easily, making it very convenient for travel and work\r\n【 65W Type-C Fast Charging 】This laptop Comes with 65W Type-C Power Adapter. And 60Wh Battery provides large life of Up to 12 hours.\r\n【Security and Privacy】2-in-1 Fingerprint Power Button saves you the trouble of entering passwords and always protects your privacy\r\n【Eye Comfort Mode】It has 14” Full HD IPS Anti-Glare Screen. And has Support of TÜV Rheinland Low Blue Light Certification, and Flicker Free Certification. It Protects your eyes at all times, and your eyes will no longer be fatigued when working\r\n【 Backlit Keyboard 】 Honor Magicbook 14 (2023) comes with a Backlit keyboard that allows you to type comfortably even in low-light & dark conditions\r\n【 Webcam 】It comes with 720P HD Webcam that allows you to click pictures, record videos, and allow you to do video conferencing and presentation\r\n【Operating System】 Pre-Loaded Windows 11 Home 64-bit\r\n【 Multi–Purpose Type-C Connector 】 The Type C Port - Support Charging & Data Transfer (up to 10Gbps) / Reverse Charging (Max External power supply 5V/2A) / Display output. The power Adapter supports multi-device charge & weighs only 200 grams making it easy to carry', 9),
(10, 'Asus', 'ROG Strix G15', 'Gaming', 16, '1920x1080', 'IPS FHD 144Hz', 'AMD', 'Ryzen 7', '6800H', 4.7, 'Dedicated', 'Nvidia', 'GeForce RTX 2050 Laptop', 4096, 16, 4800, 'SSD NVMe M.2', 1024, 'Windows 11 Home', 2.1, 83100, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222545277345599568/h732.png?ex=66169b03&is=66042603&hm=8701646d8aee744c34ffdc747c1a685673dfdd6223e55ed6e23443c96a17a6e2&=&format=webp&quality=lossless&width=476&height=350', 'https://m.media-amazon.com/images/I/81KBilyN30L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/91mrMWWUU1L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71XNYqFartL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71smW-TruRL._SX679_.jpg', 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/3d8f1bbd-3a58-4615-a1e3-c52b24121abb.__CR0,0,1940,1200_PT0_SX970_V1___.jpg\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223617775470252152/image.png?ex=661a81db&is=66080cdb&hm=1b3b29bb4974af4bbfb4070a19a74cf362d5986482a49b83935ec9e2ebe14e2a&', '2022', 'Processor: AMD Ryzen 7 6800HS Mobile Processor (8-core/16-thread, 20MB cache, up to 4.7 GHz max boost)\r\nFree Accessories: This Model Includes ROG Strix Impact II Mouse and ROG Sheath Electro Punk Limited Edition\r\nPlay over 100 high-quality PC games, plus new and upcoming blockbusters on day one like Halo Infinite, Forza Horizon 5, and Age of Empires IV and one month of Game Pass-including EA Play.\r\nMemory: 16GB (8GB SO-DIMM *2) DDR5 4800MHz Upgradeble Up to 32GB using 2x SO-DIMM Slot | Storage: 1TB PCIe 4.0 NVMe M.2 SSD with empty additional 1x M.2 Slot for SSD Storage\r\nDisplay: 15.6-inch ( 39.62 cm) FHD (1920 x 1080) 16:9 250nits, 144 Hz Refresh Rate, vIPS-level Anti-glare display, Contrast Ratio: 1000:1, with Adaptive-Sync\r\nGraphics: Dedicated NVIDIA GeForce RTX 3050 4GB GDDR6 VRAM with ROG Boost: 1550MHz* at 95W (1500MHz Boost Clock+50MHz OC, 80W+15W Dynamic Boost)\r\nOperating System: Pre-installed Windows 11 Home with Lifetime Validity | Software Included: Pre-installed Office Home and Student with Lifetime Validity\r\nDesign: 2.06 ~ 2.59 cm | 2.10 Kg weight| 56WHrs, 4S1P, 4-cell Li-ion;\r\nKeyboard: Backlit Chiclet Keyboard 4-Zone RGB\r\nI/O Port: 1x 2.5G LAN port, 1x USB 3.2 Gen 2 Type-C, 1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNC, 2x USB 3.2 Gen 1 Type-A | Other: Wi-Fi 6(802.11ax) (Dual band) 2*2 + Bluetooth 5.2 AI noise-canceling technology, Dolby Atmos, Hi-Res certification', 10),
(11, 'Dell', 'Alienware m18 R1', 'Gaming', 18, '2560x1440', 'QHD 165Hz Nvidia G-Sync Compatible 3ms', 'Intel', 'i9', '13900HX', 3.9, 'Dedicated', 'Nvidia', 'GeForce RTX 4080', 12288, 32, 3200, 'SSD NVMe M.2', 1024, 'Windows 11 Home', 3.86, 365690, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222545491007639582/awx16nt-cnb-0055rf110-gy-perkey-track-pad-off.png?ex=66169b36&is=66042636&hm=5f5ddbe2301df9cae0a0046381f4aa2d38b98ca2f1fd63fbbe627c146759beba&=&format=webp&quality=lossless&width=350&height=350', 'https://m.media-amazon.com/images/I/31VAmpORlwL._SX300_SY300_QL70_FMwebp_.jpg\r\nhttps://m.media-amazon.com/images/I/61ZiUpcSn1L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61pD7PopYkL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61vQ4OM+NQL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71H2s8XsldL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61BZe65rilL._SX679_.jpg', 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/140a9e08-3d25-450c-a15c-64d53ffbedfb.__CR0,0,970,600_PT0_SX970_V1___.jpg\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223620600652632195/image.png?ex=661a847c&is=66080f7c&hm=1c8d8eb59a9f0ed1e313d21a52a6634f8211da18336b1c4c55831f6074d18b12&\r\nhttps://m.media-amazon.com/images/S/aplus-media-library-service-media/de4d0540-fbc9-47ab-8510-fc47922f9ae1.__CR0,0,970,600_PT0_SX970_V1___.jpg\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223620601252679711/image.png?ex=661a847d&is=66080f7d&hm=b72d306278640fb8ae75f94c5fefad63b766167bd091686dc47c4d862a410eca&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223620601504071742/image.png?ex=661a847d&is=66080f7d&hm=2b5196edf7b9ca268f53402ffa1e7149a9ac181376fe8b4d6bc2a6c688578a94&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223620601764122714/image.png?ex=661a847d&is=66080f7d&hm=41b72cf411398b38182fa9ff93f55a1847d323d3c4ab040adb1156f94fc2fb81&\r\nhttps://cdn.discordapp.com/attachments/1223253278330978405/1223620603253362698/image.png?ex=661a847d&is=66080f7d&hm=8e0d071baa20f4e6d1022ded61d55cdeb9625f9f524472b14e65567d87886882&\r\n', '2023', 'Features- Powerful performance with the latest in CPU(13G HX-series)/GPU (RTX 40-series) technology: Uncompromised gaming experience with a larger screen, full-sized CherryMX keyboard\r\nProcessor: Intel i9-13900HX 13th Generation (3.90 GHz up to 5.40 GHz) 36MB Cache & 24 Cores // RAM & Storage: 32GB, 2x16GB, DDR5, 4800MHz, (2 DIMM Slots, Expandable upto 64GB) & 1TB SSD\r\nGraphics & Keyboard: NVIDIA GeForce RTX 4080 12GB GDDR6 & Alienware CherryMX ultra-low-profile mechanical Backlit Keyboard with per-key AlienFX // Display: 18.0\" QHD+ CompfortView Plus NVIDIA G-SYNC + DDS, 100% DCI-P3, FHD IR Camera 165Hz 3ms\r\nPorts: Left : (1x) RJ-45, (1x) Global headset jack, (1x) Type-A USB 3.2 Gen 1 Port with PowerShare. Right : (1x) Type-C USB 3.2 Gen 1 Port. Back : (1x) Power/DC-in Port, (2x) Type-C (Thunderbolt 4.0, USB 4 Gen 2, 15W (3A/5V) Power // Software: Win 11 Home + Office H&S 2021', 9),
(12, 'HP ', 'OMEN Gaming Laptop', 'Gaming', 18, '2560x1440', 'QHD IPS 240Hz 3ms', 'Intel', 'i9', '13900HX', 5.4, 'Dedicated', 'Nvidia', 'GeForce RTX 4080', 12288, 32, 5600, 'SSD NVMe PCIe Gen 4', 1024, 'Windows 11 Home', 2.76, 303501, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222545772307021874/ImageMain2x.png?ex=66169b79&is=66042679&hm=ecdcbf0e63b9a516c32643fb1f82026de8946151e9721a0913a093b7338eb3be&=&format=webp&quality=lossless&width=412&height=350', 'https://m.media-amazon.com/images/I/610rpD6+b6L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61KDEOW-33L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61DmXRka2AL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51eSdRXtFAL._SX679_.jpg', '', '2023', '【24-core 13th Gen Intel Core i9-13900HX】Master the art of gaming with 32 threads and 36MB L3 cache for fast processing speeds. Stay cool under pressure with OMEN Tempest Cooling.\r\n【12GB NVIDIA GeForce RTX 4080 Laptop GPU】Experience the thrill of gaming with incredible graphics, AI-accelerated performance, and enhanced 3D rendering.\r\n【Swift memory and storage】Game without limits with 32GB DDR5-5600 MHz RAM and a 1TB PCIe Gen4 NVMe TLC M.2 SSD for smooth, lag-free gameplay.\r\n【Popular games】Enjoy the latest games like Counterstrike, Call of Duty, GTA V, Cyberpunk 2077, World of Warcraft, Minecraft, The Witcher 3, God of War 4, FIFA 23, Gotham Knights, and more.\r\n【Micro-edge display】Dive into action on a 17.3-inch, QHD, micro-edge display with a rapid 240Hz refresh rate that brings your games to life with stunning clarity and detail.\r\n【Uninterrupted connectivity】Stay connected with Wi-Fi 6E (2x2) Bluetooth 5.3. The laptop also includes 1 x USB Type-C, 3 x USB Type-A, 1 x HDMI 2.1, 1 x Mini DisplayPort, and 1 x RJ-45 port.\r\n【Long-lasting power】Keep the game going with a 6-cell, 83Wh battery. Be always ready for the next action with fast charge of up to 50% in 30 minutes.\r\n【Enhanced gaming sessions】Coordinate with your squad with HP Wide Vision 720p HD camera and temporal noise reduction, complemented by audio by Bang & Olufsen.\r\n【Pre-installed Win 11 and MS Office】Start gaming right away with pre-loaded Win 11 and MS Office. Sign in or sign up to activate your MS Office.\r\n【Sustainable choice】Choose a laptop that features ocean-bound plastic and post-consumer recycled plastic. The laptop is also EPEAT Silver registered and ENERGY STAR certified.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `login_credential`
--

CREATE TABLE `login_credential` (
  `id` int(10) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `billing_address` varchar(1000) NOT NULL,
  `ba_country` varchar(50) NOT NULL,
  `ba_state` varchar(50) NOT NULL,
  `ba_city` varchar(50) NOT NULL,
  `ba_pincode` int(10) NOT NULL,
  `shipping_address` varchar(1000) NOT NULL,
  `sa_country` varchar(50) NOT NULL,
  `sa_state` varchar(50) NOT NULL,
  `sa_city` varchar(50) NOT NULL,
  `sa_pincode` int(10) NOT NULL,
  `admin` tinyint(2) NOT NULL,
  `block _status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_credential`
--

INSERT INTO `login_credential` (`id`, `user`, `pass`, `name`, `email`, `phone_number`, `billing_address`, `ba_country`, `ba_state`, `ba_city`, `ba_pincode`, `shipping_address`, `sa_country`, `sa_state`, `sa_city`, `sa_pincode`, `admin`, `block _status`) VALUES
(1, 'Aryan728', 'Neeta72819', 'Aryan Sharma', 'Saryan728@gmail.com', '9757142120', '203, Ashtavinayak Darshan CHS, Tekdi Bangla Panchpakhadi, Thane (W) - 400602', 'LV', '006', 'Thane', 123123, '203, Ashtavinayak Darshan CHS, Tekdi Bangla Panchpakhadi, Thane (W) - 400602', '', '', '', 0, 1, 0),
(2, 'test', 'test', 'Ryan Knight', 'blazeknight728@gmail.com', '12321', '123, Building Name, Street Name, Area Name', 'ES', 'B', 'Barcelona', 12141, '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `network_card`
--

CREATE TABLE `network_card` (
  `network_card_id` bigint(20) DEFAULT NULL,
  `manufacturer` varchar(1024) DEFAULT NULL,
  `model_name` varchar(1024) DEFAULT NULL,
  `category` varchar(1024) DEFAULT NULL,
  `interface` varchar(1024) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `no_of_rating` bigint(20) DEFAULT NULL,
  `no_of_reviews` bigint(20) DEFAULT NULL,
  `display_image` varchar(1024) DEFAULT NULL,
  `carousel_images` varchar(1024) DEFAULT NULL,
  `desc_images` varchar(1024) DEFAULT NULL,
  `release_year` bigint(20) DEFAULT NULL,
  `about` varchar(1024) DEFAULT NULL,
  `stock` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `network_card`
--

INSERT INTO `network_card` (`network_card_id`, `manufacturer`, `model_name`, `category`, `interface`, `price`, `no_of_rating`, `no_of_reviews`, `display_image`, `carousel_images`, `desc_images`, `release_year`, `about`, `stock`) VALUES
(2000000, 'TP-Link', 'TG-3468', 'Wired', 'PCIe x1', 1490, 0, 0, 'https://drr622wuctn26.cloudfront.net/image/cachewebp/catalog/networking/tp%20link/tg-3468/tg-3468-2-600x600.webp', 'https://m.media-amazon.com/images/I/51jZwFkV0DL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61Mehbp-0FL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51n6TsnamoL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61rEIL7V4LL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/515pEuJNNgL._SX679_.jpg', 'https://m.media-amazon.com/images/S/aplus-media/vc/2c8415f7-7e7c-4019-9b76-370d2097a177.__CR0,0,970,300_PT0_SX970_V1___.jpg\r\nhttps://cdn.discordapp.com/attachments/1196163965110202440/1226513135930703974/image.png?ex=66250a5f&is=6612955f&hm=c38d9f011676e61f80cd1a789a713c7e4a2ca49d840b9db418c6988b8d187464&', 2018, 'Interface —— 32-bit PCIe interface 10/100/1000Mbps RJ45 PCIe Adapter, saving the finite chassis space\r\nAutomization —— Wake-on-LAN, convenient to manage over LAN\r\nData Rates —— 10/100/1000Mbps for Half-Duplex mode and 20/200/2000Mbps for Full-Duplex mode\r\nFlow Control —— IEEE 802.3x Flow Control (Full-Duplex)\r\nCompatibility —— Windows 7/8/8.1/10/11 (32/64bits), Windows Vista (32/64 bits), Window XP (32/64bits)\r\nIn an unlikely case of product quality related issue, we may ask you to reach out to brand’s customer service support and seek resolution. We will require brand proof of issue to process replacement request.', 10),
(2000001, 'Asus', 'XG-C100C', 'Wired', 'PCIe x4', 7990, 0, 0, 'https://m.media-amazon.com/images/I/811VxWd5jNL._SX679_.jpg', 'https://m.media-amazon.com/images/I/811VxWd5jNL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71Z6cTzqYCL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/21bTYljifTL.jpg', NULL, 2017, 'Hyper-fast 10GBPS networking - enjoy up to 10x-faster data-transfer speeds for bandwidth-demanding tasks\r\nStylish built-in cooling – Stylish aluminum heatsink efficiently expels heat for reliable non-stop operation.\r\nCompatible with windows and linux - supports windows 10 and linux kernel 4.4 for flexible os integration\r\nPrioritize Your Games – Built-in Quality-of-Service (QoS) technology lets you prioritize bandwidth and supported gaming packets for a smooth gaming experience.\r\nAsus India 3 Year Warranty', 10),
(2000004, 'Intel', 'X540-T2', 'Wired', 'PCIe x8', 7990, 0, 0, 'https://m.media-amazon.com/images/I/61jwAh+JM0L._SX679_.jpg', 'https://m.media-amazon.com/images/I/61jwAh+JM0L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71C9ZG-7K8L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/419yd-nW00L.jpg\r\nhttps://m.media-amazon.com/images/I/51BPqYNj2pL.jpg', NULL, 2015, 'Reliable And Proven 10 Gigabit Ethernet Technology From Intel Corporation.Made In Taiwan , Low Power, 10 Gigabit Ethernet 10Gbe Performance For The Entire Data Center Standard Cat-6A Cabling With Rj45 Connectors\r\nDesign That Delivers High Availability, Scalability, And For Maximum Flexibility And /Performance\r\nUnified Networking Delivering Lan, Iscsi, And Fcoe In One Cna\r\nIndustry First Dual-Port 10Gbase-T Adapter With Single-Chip Solution With Integrated Mac Phy\r\nIntel Ethernet Converged Network Adapter X540-T2 10Gbase-T Dual Port, Passive Heatsink, Pcie 21 5Gt/S, Standard Cat6A Cabling With Rj45 Connectors Backward Compatibility With Existing 1000Base-T Networks Simplifies The Transition To 10Gbe Flexible I/O Virtualization For Port Partitioning And Quality Of Service Qos Of Up To 64 Virtual Ports', 10),
(2000005, 'TP-Link', 'TX201', 'Wired', 'PCIe x1', 2490, 0, 0, 'https://m.media-amazon.com/images/I/51YTQE81h7L._SX679_.jpg', 'https://m.media-amazon.com/images/I/51YTQE81h7L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51og43OXBmL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51eMEKkNlZL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51u90xhAFeL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51sh75SIUPL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/515FxcZvm9L._SL1000_.jpg\r\nhttps://m.media-amazon.com/images/I/51N+CElCu3L._SL1000_.jpg', 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/9aebf3f9-05ef-46c0-9735-15ac8b34b019.__CR0,0,970,300_PT0_SX970_V1___.jpg\r\nhttps://cdn.discordapp.com/attachments/1196163965110202440/1226517729339510825/image.png?ex=66250ea6&is=661299a6&hm=5cfa02d6695e5027b22199dfdf680321f113d496f96e6718a2e9c855269979f3&\r\nhttps://cdn.discordapp.com/attachments/1196163965110202440/1226517808364650516/image.png?ex=66250eb9&is=661299b9&hm=31689a3a999b106228ce15c1d941399267e54a638d30d0b2819720a2e6a8724d&\r\nhttps://cdn.discordapp.com/attachments/1196163965110202440/1226517809002053714/image.png?ex=66250eb9&is=661299b9&hm=9c8678feb0f166331806ab88465fb50133a14620be00ff321c4f9c3abe85406b&', 2023, 'Blazing Speed —— 2.5 Gigabit Ethernet unlock the highest performance of your Multi-Gig bandwidth and devices. Whether local data transfer or Internet access, the TX201 is up to the task.\r\nVersatile Compatibility —— With extreme speed and ultra-low latency, 2.5GBase-T is backwards compatible with Fast Ethernet and Gigabit Ethernet, automatically negotiating between higher and lower speed connections.\r\nLow-Profile and Full-Height Brackets —— In addition to the standard bracket, a low-profile bracket is provided for mini tower computer cases. Customized options give you the flexibility to find a bracket that perfectly fits your board design.\r\nComprehensive System Support —— Fully compatible with Windows 11/10/8.1/8/7, Windows Servers 2022/2019/2016/2012 R2/2012/2008 R2, Linux.', 10),
(2000006, 'TP-Link', 'TX401', 'Wired', 'PCIe x4', 7490, 0, 0, 'https://m.media-amazon.com/images/I/61dFLVEPpPL._SX679_.jpg', 'https://m.media-amazon.com/images/I/41AFL3zJEwL._SX300_SY300_QL70_FMwebp_.jpg\r\nhttps://m.media-amazon.com/images/I/51jd3DswBvL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/512mB-AQ3VL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61RtMSm6YDL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51CZ0+yRA3L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61dFLVEPpPL._SX679_.jpg', NULL, 2020, '10 Gbps Networking —— Combined with the latest 10GBase-T Technology, TX401 delivers extreme speeds of up to 10 Gbps, which is 10× faster than typical Gigabit adapters, guaranteeing smooth data transmissions for both internet access and local data transmissions.\r\nVersatile Compatibility —— With extreme speed and ultra-low latency, 10GBase-T is backwards compatible with Fast Ethernet and Gigabit Ethernet, automatically negotiating between higher and lower speed connections.\r\nCAT6A Ethernet Cable —— To maximize TX401\'s performance, a 1.5 m CAT6A Ethernet Cable is included—rated for up to 10 Gbps while a regular cable is only rated for 1 Gbps.\r\nLow-Profile and Full-Height Brackets —— In addition to the standard bracket, a low-profile bracket is provided for mini tower computer cases. Customized options give you the flexibility to find a bracket that perfectly fits your board design.\r\nComprehensive System Support —— Fully compatible with Windows 10/8.1/8/7, Windows Servers 2019/2016/2012 R2, and Linux to meet your', 10),
(2000007, 'Intel', 'X550-T2', 'Wired', 'PCIe x4', 16990, 0, 0, 'https://m.media-amazon.com/images/I/51FhMQMUDcL._SX679_.jpg', 'https://m.media-amazon.com/images/I/41BIrymyOuL._SY300_SX300_QL70_FMwebp_.jpg\r\nhttps://m.media-amazon.com/images/I/51FhMQMUDcL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61g0jSEISkL._SX679_.jpg', NULL, 2016, 'Intel Corp.\r\nX550T2', 10),
(2000008, 'Intel', 'EXPI9301CTBLK', 'Wired', 'PCIe x1', 4990, 0, 0, 'https://m.media-amazon.com/images/I/414wuSDtNtL._SX300_SY300_QL70_FMwebp_.jpg', 'https://m.media-amazon.com/images/I/414wuSDtNtL._SX300_SY300_QL70_FMwebp_.jpg', NULL, 2010, 'Brand:	Intel\r\nHardware Interface:	Ethernet\r\nCompatible Devices:	Desktop\r\nData Link Protocol:	Gigabit Ethernet\r\nData Transfer Rate:	1024 Megabits Per Second\r\nItem Weight:	0.07 Kilograms', 10),
(2000011, 'Intel', 'X520-DA1', 'Wired', 'PCIe x8', 10990, 0, 0, 'https://m.media-amazon.com/images/I/41sXvu2uzcL._SX300_SY300_QL70_FMwebp_.jpg', 'https://m.media-amazon.com/images/I/41sXvu2uzcL._SX300_SY300_QL70_FMwebp_.jpg\r\nhttps://m.media-amazon.com/images/I/61RbSN2un4L._SL1008_.jpg\r\nhttps://m.media-amazon.com/images/I/61ceC6j1GAL._SL1008_.jpg\r\nhttps://m.media-amazon.com/images/I/61f9rbkx2tL._SL1008_.jpg\r\nhttps://m.media-amazon.com/images/I/618PTvBpFIL._SL1008_.jpg\r\nhttps://m.media-amazon.com/images/I/61A7Mpu17OL._SL1008_.jpg\r\nhttps://m.media-amazon.com/images/I/61iVyCfvhQL._SL1008_.jpg\r\nhttps://m.media-amazon.com/images/I/519gLMetOsL._SL1500_.jpg', NULL, 2016, 'The Intel 82599ES chip is used as the main control chip to effectively prevent packet loss, makes the servers more stable when running uninterrupted.\r\nSingle SFP+ Ports, can connect 10Gb/s SFP+ Transceiver Modules or SFP+ Direct Attach Copper Cables, but please kindly note to choose compatible Intel.\r\nNetwork card compatible with a broad range of operating systems, including Windows Server, Windows7/8/Visa, Linux, VMware and more. Support PCI Express X8 or X16 slots.\r\nEasy to use, just need to download the driver from CD and install on you computer. Or download the driver from Intel?s website.\r\n1-year Warranty, 30 Days Free-returned, Free Lifelong Technology Support.', 10),
(2000012, 'Intel', 'E1G42ETBLK', 'Wired', 'PCIe x4', 3990, 0, 0, 'https://img.genuinemodules.com/cache/catalog/products/E1G42ETBLK/E1G42ETBLK-1-800x800.jpg', 'https://img.genuinemodules.com/cache/catalog/products/E1G42ETBLK/E1G42ETBLK-1-800x800.jpg\r\nhttps://img.genuinemodules.com/cache/catalog/products/E1G42ETBLK/E1G42ETBLK-2-800x800.jpg\r\nhttps://img.genuinemodules.com/cache/catalog/products/E1G42ETBLK/E1G42ETBLK-3-800x800.jpg', NULL, 2011, 'he Intel E1G42ETBLK Gigabit ET Dual Port Server Adapters are Intel\'s third generation of PCle GbE network adapters. Built with the Intel 82576 Gigabit Ethernet Controller, these new adapters showcase the next evolution in bE networking features for the enterprise network and data center. These features include support for multi-core processors and optimization for server virtualization.\r\n\r\nThe dual-port adapters provide high-performing, multi-port Gigabit connectivity in a multi-core platform as well as in a virtualized environment. In a multi-core platform, the adapters support different technologies such as multiple queues, receive-side scaling, MSI-X, and Low Latency Interrupts, that help in accelerating the data across the platform, thereby improving application response times.\r\n\r\nSpecifications\r\n\r\nManufacturer: Intel \r\nProduct Category: Ethernet Modules\r\nPart Number: E1G42ETBLK\r\nProduct: Gigabit ET Dual Port Server Adapter\r\nNumber of Ports: 2 x RJ45 \r\nData Rate: 10 Mb/s, 100 Mb/s, 1 Gb/s \r\nInterface Type', 10),
(2000013, 'StarTech', 'USB32000SPT', 'Wired', 'USB Type-A 3.2 Gen 1', 5490, 0, 0, 'https://m.media-amazon.com/images/I/61cHu6Xl2xL._SL1500_.jpg', 'https://m.media-amazon.com/images/I/61cHu6Xl2xL._SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/41HaP2Y1YtL.jpg\r\nhttps://m.media-amazon.com/images/I/8140GdkyYAL._SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/91qEfrhCPcL._SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/414IX06bhSL.jpg\r\nhttps://m.media-amazon.com/images/I/31ouZdBOAQL.jpg\r\nhttps://m.media-amazon.com/images/I/61lY6bsvyEL._SL1500_.jpg', NULL, 2013, 'Brand:	StarTech\r\nHardware Interface:	USB 3.0\r\nCompatible Devices:	Desktop\r\nData Link Protocol:	USB, Gigabit Ethernet\r\nData Transfer Rate:	5000 Megabits Per Second\r\nItem Weight:	59 Grams\r\nNumber Of Ports: 4\r\nIncluded Components: Pack Of 1\r\nSpecial Features: Lightweightusb', 10),
(2000014, 'Syba', 'SY-ADA24029', 'Wired', 'USB Type-A 2.0', 899, 0, 0, 'https://m.media-amazon.com/images/I/51T4Ch1NF+L._SL1088_.jpg', 'https://m.media-amazon.com/images/I/51T4Ch1NF+L._SL1088_.jpg\r\nhttps://m.media-amazon.com/images/I/61ik83VImRL._SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/81oex8rksHL._SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/71T2UJRUYhL._SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/610IXWreT0L._SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/41z3r2pLXYL.jpg\r\nhttps://m.media-amazon.com/images/I/71OnwDasayL._SL1500_.jpg', NULL, 2012, 'Supports Full Duplex Operation with IEEE 802.3x Flow Control and Half Duplex Operation with Back-pressure Flow Control\r\nCompatible with IEEE 802.3, IEEE 802.3u, IEEE 802.3ab\r\nSupports Advanced Link Down Power Saving When Ethernet Cable is Unplugged\r\nSupports Crossover Detection and Auto-correction\r\nSupports Wake-on-LAN', 10),
(2000015, 'Gigabyte', 'GC-AQC107', 'Wired', 'PCIe x4', 14990, 0, 0, 'https://static.gigabyte.com/StaticFile/Image/Global/ff5f4d24803cf4875fa2663355503054/Product/18545/png/2000', 'https://static.gigabyte.com/StaticFile/Image/Global/a28363f541211d9c1a28f8da34b0a58c/Product/18544/png/2000\r\nhttps://static.gigabyte.com/StaticFile/Image/Global/ff5f4d24803cf4875fa2663355503054/Product/18545/png/2000\r\nhttps://static.gigabyte.com/StaticFile/Image/Global/5c25f2cc4c81e40a74463bef1f0f897e/Product/18546/png/2000', 'https://www.gigabyte.com/FileUpload/Global/KeyFeature/803/images/main.jpg\r\nhttps://www.gigabyte.com/FileUpload/Global/KeyFeature/803/images/Faster-10x.png\r\nhttps://www.gigabyte.com/FileUpload/Global/KeyFeature/803/images/backward-compatibility.png', 2017, 'Up to 10X-faster transfer speeds\r\nBackward compatibility with 10GBASE-T/5GBASE-T/2.5GBASE-T/1000BASE-T/ 100BASE-TX\r\nEasy to upgrade PC by PCIe3.0/PCIe2.0 interface\r\nStandard CAT-6a cabling with RJ45 connectors\r\nSupports Windows 10/8.1/7 (32/64 bits)', 10),
(2000017, 'Syba', 'SD-PEX24066', 'Wired', 'PCIe x1', 2990, 0, 0, 'https://m.media-amazon.com/images/I/61JLeD-FNLL._AC_SX679_.jpg', 'https://m.media-amazon.com/images/I/61JLeD-FNLL._AC_SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71UAROYOpuL._AC_SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71eJ1PniqkL._AC_SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61uMBhsv9FL._AC_SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71oUd+gkhiL._AC_SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61t1qjHHktL._AC_SL1200_.jpg', NULL, 2019, 'With this PCIe Card, you can add a 10/100/1000/25000 Mbps Ethernet port to any PC through a PCIe slot. Fits any PCI Express x1, x2, x4, x8 or x16 socket; additional 8cm low-profile bracket provides the option for installation in small size HTPC case.\r\nThis pci-based 10/100/1000/25000 Dual 2. 5 Gigabit Ethernet network adapter card provides a simple connection to two 2. 5 Gigabit Ethernet network, and is fully compatible with 802. 1Q virtual LAN (VLAN) tag. And Ethernet card which Is compliant to IEEE802. 3, IEEE802. 3U & IEEE802. 3ab.\r\nThe high quality PCIe Dual 2. 5 Gigabit NIC with 12cm profile bracket and additional 8cm profile bracket that makes it easy to install the card in a small form Factor/Low profile computer case/server.\r\n2. 5 Gigabit network card Compatible with a broad range of operating systems, including Windows 10, 8/8. 1, 98SE, ME, 2000, XP, XP-64bit, Vista, Vista-64bit, 7, 7-64bit, Linux, 10. 7\r\nWhat you get: IO crest 2. 5 Gigabit PCI-E network card x1, driver Disk x1, 8cm low-profile brack', 10),
(2000020, 'Supermicro', 'AOC-STG-i2T', 'Wired', 'PCIe x8', 29990, 0, 0, 'https://www.wiredzone.com/web/image/product.template/3314/image?unique=ca38e38', 'https://www.wiredzone.com/web/image/product.template/3314/image?unique=ca38e38', NULL, 2023, 'RoHS compliant 6/6\r\nDual RJ45 Connectors\r\niSCSI Remote Boot Support\r\nOperating Systems (NOSs)\r\nIntel® QuickData Technology\r\nLoad Balancing on Multiple CPUs\r\nPCI Express 2.1 (2.5GT/s or 5GT/s)\r\nFibre Channel over Ethernet (FCoE)\r\nSupport the most popular Network\r\nJumbo Frames Support up to 15.5KB\r\nLow-Profile, Short Length Standard Form Factor\r\nVMDq, Next-Generation VMDq, and PC-SIG SR-IOV for Virtualized Environments', 10);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `nw_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`nw_id`, `email`, `status`) VALUES
(1, 'Saryan728@gmail.com', 1),
(1292, 'neetasharma2007@rediffmail.com', 1),
(1418, 'mj123@gmail.com', 1),
(1444, 'oyecadbury@gmail.com', 1),
(1476, 'aryanmaurya@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_logs`
--

CREATE TABLE `order_logs` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`product_id`)),
  `payment_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `quantity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`quantity`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_logs`
--

INSERT INTO `order_logs` (`order_id`, `customer_id`, `product_id`, `payment_id`, `amount`, `order_status`, `quantity`) VALUES
(4, 1, '[\"1\",\"9\"]', 0, 194570.2, '', '[\"1\",\"1\"]');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `pc_id` int(11) NOT NULL,
  `manufacturer` varchar(60) NOT NULL,
  `model_name` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cpu_brand` varchar(25) NOT NULL,
  `cpu_series` varchar(25) NOT NULL,
  `cpu_name` varchar(50) NOT NULL,
  `cpu_speed` double NOT NULL,
  `gpu_type` varchar(25) NOT NULL,
  `gpu_brand` varchar(50) NOT NULL,
  `gpu_series` varchar(50) NOT NULL,
  `vram` int(11) NOT NULL,
  `ram_size` int(11) NOT NULL,
  `ram_speed` int(11) NOT NULL,
  `storage_type` varchar(250) NOT NULL,
  `storage_size` int(11) NOT NULL,
  `power_supply` int(11) NOT NULL,
  `power_supply_detail` varchar(1000) NOT NULL,
  `price` double NOT NULL,
  `no_of_rating` int(11) NOT NULL,
  `no_of_reviews` int(11) NOT NULL,
  `images` longtext NOT NULL,
  `carousel_images` longtext NOT NULL,
  `about` longtext NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`pc_id`, `manufacturer`, `model_name`, `category`, `cpu_brand`, `cpu_series`, `cpu_name`, `cpu_speed`, `gpu_type`, `gpu_brand`, `gpu_series`, `vram`, `ram_size`, `ram_speed`, `storage_type`, `storage_size`, `power_supply`, `power_supply_detail`, `price`, `no_of_rating`, `no_of_reviews`, `images`, `carousel_images`, `about`, `stock`) VALUES
(1000000, 'Asus', 'ROG Strix G13 CHR', 'Full Tower', 'Intel®', 'i7', '14700F', 2.1, 'Dedicated', 'NVIDIA®', 'GeForce RTX™ 4060', 8096, 64, 5600, 'PCIe Gen4 NVMe', 2048, 650, ' Watt Power Supply (70+ Silver)', 139990, 0, 0, 'https://media.discordapp.net/attachments/1222870275167621292/1222870307451437076/s2_img.png?ex=6617c9b9&is=660554b9&hm=b96cb22562d043a33d3777508271223159843fd2bd4a9e49d3d0e498d22a3bde&=&format=webp&quality=lossless&width=322&height=350', 'https://dlcdnwebimgs.asus.com/files/media/F6CF59BB-5907-40FB-90D4-C5AC6BA01EC0/v11/img/design_1.webp\r\nhttps://dlcdnwebimgs.asus.com/files/media/F6CF59BB-5907-40FB-90D4-C5AC6BA01EC0/v11/img/design_2.webp\r\nhttps://dlcdnwebimgs.asus.com/files/media/F6CF59BB-5907-40FB-90D4-C5AC6BA01EC0/v11/img/design_3.webp', 'Unlock the full Windows 11 Pro gaming experience with the ROG Strix G13CH. \r\nPowered by up to a 13th Gen Intel® Core™ i7-13700 processor and up to an NVIDIA® GeForce RTX™ 40 Series GPU, the Strix G13CH is truly ready for battle. \r\nIt also boasts up to 64GB of 3200MHz DDR4 RAM and up to 2TB of PCIe Gen4 NVMe storage on two drives, with an additional 1TB HDD for larger game and music libraries. \r\nGame, stream, and leave all your tabs open without a worry thanks to the horsepower of the Strix G13CH.', 10),
(1000001, 'Asus', 'ROG Strix GT15', 'Full Tower', 'Intel®', 'i5', '12400F', 2.5, 'Dedicated', 'NVIDIA®', 'GeForce RTX™ 3060', 12234, 32, 3200, 'PCIe Gen4 NVMe', 1024, 500, ' Watt Power Supply (80+ Gold, peak 550W)', 125990, 0, 0, 'https://media.discordapp.net/attachments/1222870275167621292/1222892700714405968/DD0F9C21-6645-45D5-B36A-8D1E3F0C0516.png?ex=6617de94&is=66056994&hm=a996a4e4ec9e8e057b6bb0ef8a230698fb24f80899497d4225852355744718d2&=&format=webp&quality=lossless&width=476&height=350', 'https://dlcdnwebimgs.asus.com/gain/DD0F9C21-6645-45D5-B36A-8D1E3F0C0516\r\nhttps://m.media-amazon.com/images/I/71susYn5O6L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/7172AQFu2xL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/71cbs+dnjpL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/81iq1T+sGPL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/712jXuZk+OL._SX679_.jpg', 'Processor: 10th Gen Intel Core i7-10700 Processor, 2.9 GHz Base Speed, Up to 4.7 GHz Max Turbo Speed, 8 Cores, 16 Threads, 16MB Cache\r\nMemory & Storage: 16GB (8GB*2) DDR4 LO-DIMM 2933MHz with | Storage: 1TB SATA 7200RPM 3.5-inch (8.89 cms) HDD + 512GB M.2 NVMe PCIe 3.0 SSD\r\nGraphics: Dedicated NVIDIA GeForce RTX 2060 SUPER 8GB GDDR6 VRAM : 2x HDMI, 2x DP\r\nExpansion Slot: 1 x PCIe 3.0 x1 | 2 x PCIe 3.0 x16 | 1 x M.2 connector for WiFi | 2 x M.2 connector for SSD | 4 x DDR4 U-DIMM Slots | Drive Bay: 1x 3.5-inch (8.89 cms) Drive Bay\r\nMotherBoard: Intel B460 Chipset | Micro ATX | 6 x SATA 6.0Gb/s ports\r\nOperation System: Pre-loaded Windows 10 Home with lifetime validity | Software Included: 1-month trial for new Microsoft 365 customers\r\nDesign: Transparent side panel | 29L (Litres) | 500W 80 PLUS PSU (Power Supply Unit) | 105W Air Cooler | 11.0 Kg Weight\r\nFront I/O Port: 1x USB 3.2 Gen 1 Type-A | 1x USB 3.2 Gen 1 Type-C | 1x Headphone | 1x Microphone\r\nRear I/O Port: 1x USB 3.2 Gen 2 Type-C | 6x USB 3.2 Gen 1 Type-A | 1x Mic-in | 1x Center / Sub Woofer | 1x Front Speaker Out (Line Out) | 1x Rear Speaker Out | 1x Line-in | 1x RJ45 Gigabit Ethernet | 1x HDMI-Out | 1x DisplayPort\r\nOther: Wi-Fi 6 (802.11ax) 2*2 | Bluetooth 5.0 | Audio: SupremeFX S1220A CODEC | Sonic Studio | Armoury Crate | ASUS Aura Sync', 10),
(1000002, 'ORIGIN', '5000D Airflow', 'Full Tower', 'Intel®', 'i7', '14700K', 3.4, 'Dedicated', 'NVIDIA®', 'GeForce RTX™ 4070 Ti', 12234, 32, 5600, 'PCIe Gen4 NVMe', 2048, 750, ' Watt Power Supply (50+ Bronze)', 249990, 0, 0, 'https://media.discordapp.net/attachments/1222870275167621292/1222895297970044961/case-millennium-5000d-opc.png?ex=6617e0ff&is=66056bff&hm=733aa683bad9eb9ce16b293e4700225e3c2dd0ce288277e78999f5ed8865b697&=&format=webp&quality=lossless&width=350&height=350', 'https://m.media-amazon.com/images/I/81fki2HcyeL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/81ySHlz01sL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/81WUbwDYx8L._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/91wmntns7GL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/818WEWmVlnL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/91qeDPJGClL._SX679_.jpg', 'The 5000D makes a stunning, showpiece-worthy PC easy to build, and even easier to keep cool with the space and flexibility to mount multiple 360mm radiators\r\nA high-airflow optimized steel front panel delivers massive airflow to your system for maximum cooling.\r\nThe CORSAIR RapidRoute cable management system makes it simple and fast to route your major cables through a single hidden channel, with an easy-access hinged door and a roomy 25mm of space behind the motherboard for all of your cables.\r\nIncludes two CORSAIR 120mm AirGuide fans, utilizing anti-vortex vanes to concentrate airflow and enhance cooling.\r\nA motherboard tray with customizable fan mounts allows you to side-mount up to 3x 120mm fans or up to a 360mm radiator, enabling new flexible cooling options.', 4),
(1000003, 'Dell', 'Alienware Aurora R15', 'Mid Tower', 'Intel®', 'i9', '13900KF', 3, 'Dedicated', 'NVIDIA®', 'GeForce RTX™ 4090', 24468, 32, 4800, 'PCIe NVMe M.2', 1024, 1000, ' Watt Power Supply (90+ Diamond, peak 1100W)', 538990, 0, 0, 'https://m.media-amazon.com/images/I/619Lp1ad9WL._SX679_.jpg', 'https://m.media-amazon.com/images/I/619Lp1ad9WL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51zDGQK81oL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51nvVWfSZNL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/61rNRfKEkoL._SX679_.jpg\r\nhttps://m.media-amazon.com/images/I/51a6DdghOTL._SX679_.jpg', 'Processor: i9-13900K, 3.00 GHz Up to 4.90 GHz (20MB,10 Cores)\r\nRAM & Storage: 32GB DDR5 &1TB HDD + 256GB SSD\r\nGraphics & Display: NVIDIA GEFORCE RTX 4090 (24GB GDDR6 LHR) & No Monitor\r\nSoftware, WiFi & BT: Win 11 + Office H&S 2021, Killer Wi-Fi 6 1675 (2x2) 802.11ax Wireless and Bluetooth 5.2\r\nFRONT PORTS 1.Headphone/Line Out 2. (2x) USB 3.2 Gen 1 ports. (1x) USB 3.2 Gen 1 port with Powershare technology 3. USB 3.2 Gen 2 Type-C with Powershare technology REAR PORTS 4. Rear Surround Output 5. SPDIF Digital Output (TOSLINK) 6. Side Surround Output 7. Microphone In 8. Line Out 9. USB 3.2 Gen 2 Type-C (10Gbps) 10. USB 3.2 Gen 2x2 Type-C (20Gbps) 11. (2x) USB 2.0 Type A 12. SPDIF Digital Output (Coax) 13. Center/Subwoofer Output 14. Line In 15. (2x) USB 2.0 Type A 16. (2x) USB 3.2 Gen 1 Type-A (5Gbps) 17. RJ-45 Killer E3100 Gigabit Ethernet', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`laptop_id`);

--
-- Indexes for table `login_credential`
--
ALTER TABLE `login_credential`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_2` (`user`,`email`,`phone_number`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user` (`user`,`email`,`phone_number`);

--
-- Indexes for table `network_card`
--
ALTER TABLE `network_card`
  ADD UNIQUE KEY `network_card_id` (`network_card_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`nw_id`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `order_logs`
--
ALTER TABLE `order_logs`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`pc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `laptop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login_credential`
--
ALTER TABLE `login_credential`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `nw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1477;

--
-- AUTO_INCREMENT for table `order_logs`
--
ALTER TABLE `order_logs`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
