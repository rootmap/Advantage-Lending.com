-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 09:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advantage_lending`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_medias`
--

CREATE TABLE `about_medias` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumble_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_medias`
--

INSERT INTO `about_medias` (`id`, `title`, `thumble_image`, `detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Oasis Financial and Key Health team up with Los Angeles Trial Lawyers Charities', 'advantage-lending.com_1589395640.png', 'SPONSORSHIP HELPS THE LATLC IMPROVE THE QUALITY OF LIFE FOR DISADVANTAGED MEMBERS OF THE GREATER LOS ANGELES COMMUNITY\r\n\r\nWestlake Village, Calif., April 30, 2019 – Oasis Financial and Key Health Medical Solutions, sister companies focused on helping personal injury victims get pre-settlement funding and access to medical care, are proud to announce their support of the Los Angeles Trial Lawyers’ Charities (LATLC). The LATLC has served the greater Los Angeles community for 13 years, providing more than $4,400,000 in grants, gifts and goods to improve the quality of life in the community by supporting issues related to education, childhood hunger, survivors of abuse, persons with disabilities, and homelessness.\r\n\r\n“As local attorneys, we’re in the trenches fighting for our communities every day. We see the need first hand, and we simply know we have to give back. It’s not about just writing checks – it’s about helping in person – at women’s shelters, at food pantries, and in schools,” said Gerald Marcus, president of the LATLC. “The generous contributions from Oasis Financial, Key Health, and our other partners are critical to helping our program succeed and ensuring services and assistance gets to those in need.”\r\n\r\n“Supporting the LATLC was a natural fit for our company,” said Jeff Trigilio, President of Key Health. “Just like LATLC, we focus on helping people in unfortunate circumstances improve their lives. In our case, it’s partnering with attorneys and healthcare providers to help personal injury victims recover financially and physically from their accidents.”\r\n\r\nOasis Financial and Key Health sponsorship includes the support of one of the LATLC’s marque fundraising events, the 2019 Casino Night. On June 8th, more than 1,000 attorneys in California enjoy a little fun and comradery, while giving back to the communities they serve. “The evening is great fun – and it raises serious money for the charities served by the LATLC. Through the generous donations from our participants, we hope to raise more than $450,000 – in one night. Money that will be put to use right here in L.A., fighting poverty, improving education, and ensuring safe shelter for our most vulnerable,” said Gerald Marcus.\r\n\r\n“We’re incredibly excited and proud to be a part of the LATLC. We work hand in hand with attorneys and providers in California day in and day out,” said Jeff Trigilio. “To be a part of this special event and incredible charity that reaches back out to help our communities is a distinct honor, and we invite all the attorneys we serve to join us in making a difference.”\r\n\r\nMore About Oasis Financial & Key Health\r\n\r\nOasis Financial was founded in 1996 by attorneys who saw a need among clients burdened with increasing medical bills and living expenses, but their cases weren’t settling fast enough to keep up with their bills. The attorneys launched Oasis to provide a way for plaintiffs to receive an advance on their settlement and make life livable until their case closed. Today, Oasis has helped over 250,000 consumers make ends meet while waiting for their case to settle. In 2017, Oasis merged with  Key Health, the nation’s leader in medical lien funding.  Key Health works with medical providers spanning the U.S. who offer services to injured victims on a lien or letter of protection basis as part of a personal injury claim. Together, Key Health and Oasis help personal injury victims recover both physically and financially from an accident. Working with more than 14,000 attorneys and maintaining relationships with more than 10,000 physicians, Key Health and Oasis help ensure consumers who are injured in an accident have access to great healthcare, as well as funds to cover life’s other expenses while waiting for a personal injury case to settle.\r\n\r\nMore about LATLC\r\n\r\nThe Los Angeles Trial Lawyers’ Charities (LATLC) was founded in 2006 by a small group of Los Angeles trial lawyers inspired to find new ways to serve the community beyond their roles as attorneys. LATLC’s primary purpose is to make a positive difference in the quality of life for people within the greater Los Angeles area. Today, LATLC has more than 3,000 supporters and donated more than $4,415,000 in grants, gifts and goods.  LATLC has been honored by the California State Assembly and State Senate. www.latlc.org\r\n\r\n6th Annual LATLC Casino Night will be held June 8, 2019 at 6:00 pm, at the Intercontinental Hotel in Downtown Los Angeles. More information can be found at www.latlc.org/events', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 12:47:20', '2020-05-13 12:47:20'),
(2, 'Oasis Partners with Nonprofit ARC to Increase Consumer Financial Wellness', 'advantage-lending.com_1589396269.png', '<p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\"><span class=\"xn-location\">CHICAGO</span>,&nbsp;<span class=\"xn-chron\">April 3, 2017</span>&nbsp;/PRNewswire/ —&nbsp;For the last fifteen years, the nation’s largest consumer legal funding provider,&nbsp;<a href=\"https://www.oasisfinancial.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">Oasis Financial</a>, has served consumers facing a financial crisis after an emergency or accident, and talked to people daily living paycheck-to-paycheck. To learn more about Americans’ perceptions of emergency savings, Oasis commissioned an in-depth public opinion survey from the Harris Poll last year. The results were staggering, but not shocking: Nearly two-thirds of us aren’t prepared to weather a financial crisis, which can be caused by accident or injury.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">“We knew we needed to do our part to fix the problem and help our customers get on a path toward financial wellness,” said&nbsp;<span class=\"xn-person\">Ralph Shayne</span>, CEO of Oasis Financial. “We also knew we couldn’t do it alone.”</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">Oasis partnered with the&nbsp;<a href=\"http://www.arclegalfunding.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">Alliance for Responsible Consumer Legal Funding</a>&nbsp;(ARC), a non-profit organization, to develop and launch&nbsp;<a href=\"http://www.arcfinanciallyfit.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">ARCFinanciallyFit.com</a>&nbsp;(Financially Fit), a website providing consumers with tools to achieve financial literacy and bolster emergency savings. The site officially launches today in conjunction with the start of National Financial Literacy Month.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">Financially Fit’s easy-to-digest web platform presents the best expert resources to help consumers combat a financial crisis, form good spending habits, and prepare for the future. The site also offers free one-on-one budgeting help through a partnership with&nbsp;<a href=\"http://www.moneymanagement.org/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">Money Management International</a>&nbsp;(MMI), the largest non-profit credit counseling agency in the country.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">“Most Americans are one job loss, one accident, or one health emergency away from financial crisis,” said Shayne. “Emergencies are far more damaging for those who haven’t prepared for the unexpected. Providing resources like Financially Fit allows us to be an ally in our customers’ efforts to prepare.”</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">Oasis engaged in a beta test of the site with ARC starting in&nbsp;<span class=\"xn-chron\">December 2016</span>. After four months of testing, the site garnered over 3,000 views and more than 660 people called MMI to get help. “We are looking forward to sharing this site with even more people,” said Shayne.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">“It was great to work together on this project,” said&nbsp;<span class=\"xn-person\">Rob Johnson</span>, Executive Director of ARC. “We took a holistic approach to the site, because providing concepts isn’t enough. Implementing a budget can be hard to do alone, but it’s necessary when building up emergency savings. That’s why we wanted to connect people with budget counseling, so they can take control of their financial futures and not let the unexpected turn their lives upside down.”</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">For more information visit&nbsp;<a href=\"https://www.oasisfinancial.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">www.OasisFinancial.com</a>.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\"><span style=\"font-weight: bolder;\">About Oasis Financial&nbsp;<br class=\"dnr\"></span>Oasis Financial, a national leader in consumer legal funding, is headquartered in suburban&nbsp;Chicago and has satellite offices across the country. Consumer legal funding is a debt-free solution that helps families recover and meet day-to-day needs after an accident or injury while pursuing a legal claim. With consumer legal funding, families have the choice to replace lost income immediately, when they need it most. Providers like Oasis purchase a small portion of a potential settlement amount. This purchase provides consumer-friendly benefits specifically designed for people pursuing a claim: no monthly payments, no risk to consumer credit, no risk of default, and if the case doesn’t settle, the client keeps the funding with no obligations. Oasis has helped many of the 500,000 people who have used consumer legal funding make ends meet over the last 15 years. They have an&nbsp;<a href=\"https://www.bbb.org/chicago/business-reviews/financial-services/oasis-financial-in-rosemont-il-33003199\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">A+ rating</a>&nbsp;from the Better Business Bureau.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\"><span style=\"font-weight: bolder;\">About ARC<br class=\"dnr\"></span>The&nbsp;<a href=\"http://arclegalfunding.org/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">Alliance for Responsible Consumer Legal Funding</a>&nbsp;(ARC) is a&nbsp;diverse coalition of consumer legal funding providers, consumers, academics, community activists, policy makers and other supporters. It was established to preserve legal funding as a choice for the many Americans who have suffered an unexpected economic loss due to an accident and have a pending legal claim. Legal funding can help families pay for immediate personal needs such as rent, mortgages, car repairs, utilities and groceries while they wait for their claims to settle fairly. ARC promotes practices and regulations that lead to informed decisions between individuals and their attorneys, so that families have more options—not fewer. ARC advocates at the state and federal levels to recommend regulations that preserve consumer choice. ARC member providers handle the majority of all legal funding transactions in&nbsp;<span class=\"xn-location\">the United States</span>.</p>', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 12:57:49', '2020-05-13 12:57:49'),
(3, 'Oasis Receives BBB A+ Certification', 'advantage-lending.com_1589396404.png', '<p class=\"p1\" style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\"><span class=\"s1\">CHICAGO, Feb. 11, 2016 /PRNewswire/ – Oasis Financial, a national pioneer in&nbsp;<a href=\"https://www.oasisfinancial.com/types-of-funding/\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\"><span class=\"s2\">pre-settlement consumer legal funding</span></a>, recently received an&nbsp;<a href=\"http://www.bbb.org/chicago/business-reviews/financial-services/oasis-financial-in-rosemont-il-33003199/#bbbonlineclick\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\"><span class=\"s3\">A+ accreditation</span></a>&nbsp;from the Better Business Bureau of Chicago and Northern Illinois (BBB) in recognition of its commitment to its customers and customer service practices.</span></p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">“Only those businesses that meet our high standards and pass the review process are approved by our Board of Directors,” Steve J. Bernas, president &amp; CEO of the Better Business Bureau serving Chicago and Northern Illinois said Tuesday. “We care deeply about our customers and know they deserve the best,” said&nbsp;<span class=\"s4\">Ralph Shayne</span><span class=\"s1\">, CEO of Oasis Financial.</span></p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">Oasis Financial leads the industry in providing consumer legal funding—funding to individuals involved in personal injury litigation, primarily due to auto and work-related accidents that do not have to be paid back if they lose their case. Legal claims take time to settle fairly. Thankfully, Oasis is there to bridge the gap—helping families make ends meet between the accident and receiving a fair insurance settlement.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">Over half-a-million people have trusted Oasis for their legal funding needs in the last decade. “We strive to provide timely, accurate information to our customers. Everything they need to make strong, informed financial choices,” said Shayne.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">According to a recent&nbsp;<a href=\"http://www.pewtrusts.org/~/media/assets/2015/10/emergency-savings-report-1_artfinal.pdf\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">PEW Charitable Trusts study</a>, nearly 55 percent of all American households lack the financial wherewithal or have more than one month’s salary in savings to weather a financial crisis, such as a the loss of income due to an injury. When disaster strikes, meeting even basic family needs can become a struggle.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">“We are there when life moves faster than your case,” said Shayne.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">About Oasis Financial<br>Oasis Financial, a national pioneer in consumer legal funding, is headquartered in suburban Chicago, Illinois, and has satellite offices across the country. Last spring it went through a highly successful rebranding campaign when its name changed from Oasis Legal Finance.</p><p style=\"line-height: 1.6; color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">Oasis continues to be a driving force in the regulatory and legislative areas of the consumer legal funding industry. It is a founding member of the&nbsp;<a href=\"http://arclegalfunding.org/\" style=\"color: rgb(224, 119, 51); transition: all 0.3s ease-in-out 0s;\">Alliance for Responsible Consumer Legal Funding (ARC)</a>, which is diverse coalition established to promote practices and regulations that lead to informed decisions between individuals and their attorneys. Families have more options—not fewer—when they’ve been in an accident. Working with a variety of stakeholders, Oasis is defining the appropriate regulations and best practices that will guide the industry well into the future.</p>', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 13:00:04', '2020-05-13 13:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `about_media_settings`
--

CREATE TABLE `about_media_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_media_settings`
--

INSERT INTO `about_media_settings` (`id`, `title`, `detail`, `button_text`, `button_url`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Media', NULL, 'Media inquiries: Contact Us <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>', 'contact-us', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 12:32:46', '2020-05-13 12:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `about_meet_our_teams`
--

CREATE TABLE `about_meet_our_teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_meet_our_teams`
--

INSERT INTO `about_meet_our_teams` (`id`, `title`, `detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Meet Our Teams', 'Advantage Lending works for our customers because of the dedicated team that works for Advantage Lending. Below is an overview of the teams and team members that make Advantage Lending great.', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:11:58', '2020-05-13 05:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `about_meet_our_team_members`
--

CREATE TABLE `about_meet_our_team_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_with_border` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_meet_our_team_members`
--

INSERT INTO `about_meet_our_team_members` (`id`, `title`, `detail`, `team_image`, `image_with_border`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BUSINESS STRATEGY AND ANALYTICS', 'The Business Strategy and Analytics team monitors business performance, identifies trends, and helps the business improve through data-driven solutions.', 'advantage-lending.com_1589369541.jpg', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:32:21', '2020-05-13 05:32:21'),
(2, 'BUSINESS STRATEGY AND ANALYTICS', 'The Business Strategy and Analytics team monitors business performance, identifies trends, and helps the business improve through data-driven solutions.', 'advantage-lending.com_1589369595.jpg', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:33:15', '2020-05-13 05:33:15'),
(3, 'BUSINESS STRATEGY AND ANALYTICS', 'The Business Strategy and Analytics team monitors business performance, identifies trends, and helps the business improve through data-driven solutions.', 'advantage-lending.com_1589369617.jpg', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:33:37', '2020-05-13 05:33:37'),
(4, 'BUSINESS STRATEGY AND ANALYTICS', 'The Business Strategy and Analytics team monitors business performance, identifies trends, and helps the business improve through data-driven solutions.', 'advantage-lending.com_1589369644.jpg', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:34:04', '2020-05-13 05:34:04'),
(5, 'BUSINESS STRATEGY AND ANALYTICS', 'The Business Strategy and Analytics team monitors business performance, identifies trends, and helps the business improve through data-driven solutions.', 'advantage-lending.com_1589369541.jpg', 'Enable', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:32:21', '2020-05-13 05:38:17'),
(6, 'BUSINESS STRATEGY AND ANALYTICS', 'The Business Strategy and Analytics team monitors business performance, identifies trends, and helps the business improve through data-driven solutions.', 'advantage-lending.com_1589369595.jpg', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:33:15', '2020-05-13 05:33:15'),
(7, 'BUSINESS STRATEGY AND ANALYTICS', 'The Business Strategy and Analytics team monitors business performance, identifies trends, and helps the business improve through data-driven solutions.', 'advantage-lending.com_1589369617.jpg', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:33:37', '2020-05-13 05:33:37'),
(8, 'BUSINESS STRATEGY AND ANALYTICS', 'The Business Strategy and Analytics team monitors business performance, identifies trends, and helps the business improve through data-driven solutions.', 'advantage-lending.com_1589369644.jpg', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 05:34:04', '2020-05-13 05:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `about_milestoneses`
--

CREATE TABLE `about_milestoneses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_milestoneses`
--

INSERT INTO `about_milestoneses` (`id`, `title`, `detail`, `image_one`, `image_two`, `image_three`, `image_four`, `image_five`, `image_six`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Milestones', 'Today our organization includes Key Health, which offers medical lien solutions; and AccidentMeds, a pharmacy card program.\r\n\r\nWe are founding partners of ARC, the Alliance for Responsible Consumer Lending, and APA, Americans for Patient Access.\r\n\r\nWe’re proud of our A+ rating from the Better Business Bureau, and our four-star rating from Trustpilot. We’ve been a lifeline for more than 250,000 individuals and families, providing relief during difficult times.', 'advantage-lending.com_1589329395.png', 'advantage-lending.com_1589329412.png', 'advantage-lending.com_1589329421.png', 'advantage-lending.com_1589329435.png', 'advantage-lending.com_1589329445.png', 'advantage-lending.com_1589329395.png', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 18:23:15', '2020-05-12 18:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `about_page_settings`
--

CREATE TABLE `about_page_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_heading_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_sub_heading` longtext COLLATE utf8mb4_unicode_ci,
  `page_short_content` longtext COLLATE utf8mb4_unicode_ci,
  `page_options` longtext COLLATE utf8mb4_unicode_ci,
  `page_options_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_page_settings`
--

INSERT INTO `about_page_settings` (`id`, `section_title`, `background_image`, `background_forecolor`, `page_heading_title`, `page_sub_heading`, `page_short_content`, `page_options`, `page_options_image`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'About Advantage-Lending', 'advantage-lending.com_1589328315.jpeg', '#133d8d', 'Legal Funding You Can Trust', 'Oasis was founded in 2003 by attorneys who saw a specific need among several of their clients. These clients were burdened with increasing medical bills and living expenses, but their cases weren’t settling fast enough to make payments. The attorneys launched Oasis to provide a way for plaintiffs to receive pre-settlement funding and make life livable until their case closed.', 'Our founders established a philosophy and values that guide our business every day.', 'Help people in difficult circumstances regain some control and prevent disaster.,Be responsible and transparent so customers can make informed choices.,Ensure a dignified customer experience by engaging them with respect and understanding.', 'advantage-lending.com_1589328315.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 18:03:08', '2020-05-12 18:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `about_work_at_advantage_lendings`
--

CREATE TABLE `about_work_at_advantage_lendings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `section_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_popup_content` mediumtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_work_at_advantage_lendings`
--

INSERT INTO `about_work_at_advantage_lendings` (`id`, `title`, `detail`, `section_image`, `image_popup_content`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Work At Advantage Lending', 'At Advantage Lending Financial, we help victims of accidents recover physically and financially from an injury. We help our customers access medical care and the funds they need to pay bills while waiting for a lawsuit to settle. Team members work directly with individual customers, attorney partners or colleagues at headquarters in a variety of specializations.\r\n\r\nIf you crave a high energy culture, possess a strong', 'advantage-lending.com_1589384243.jpg', 'If you crave a high energy culture, possess a strong work ethic, and seek rewards that match achievement, review our open jobs and apply today!', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 09:37:23', '2020-05-13 09:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `module_name`, `action`, `details`, `admin_id`, `admin_name`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Site Settings', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 19:16:00', '2020-05-07 19:16:00'),
(2, 'Site Settings', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 19:28:15', '2020-05-07 19:28:15'),
(3, 'Slider Animated Text', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 19:48:01', '2020-05-07 19:48:01'),
(4, 'Slider Animated Text', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 19:48:15', '2020-05-07 19:48:15'),
(5, 'Slider Animated Text', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 19:48:23', '2020-05-07 19:48:23'),
(6, 'Slider Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 20:10:43', '2020-05-07 20:10:43'),
(7, 'Slider Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 20:11:46', '2020-05-07 20:11:46'),
(8, 'Slider Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 20:30:54', '2020-05-07 20:30:54'),
(9, 'Slider Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 20:31:16', '2020-05-07 20:31:16'),
(10, 'How We Help', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:04:47', '2020-05-07 21:04:47'),
(11, 'How We Help', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:05:29', '2020-05-07 21:05:29'),
(12, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:05:42', '2020-05-07 21:05:42'),
(13, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:05:49', '2020-05-07 21:05:49'),
(14, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:06:02', '2020-05-07 21:06:02'),
(15, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:06:10', '2020-05-07 21:06:10'),
(16, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:19:04', '2020-05-07 21:19:04'),
(17, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:31:56', '2020-05-07 21:31:56'),
(18, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-07 21:41:08', '2020-05-07 21:41:08'),
(19, 'How We Help', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 09:48:45', '2020-05-08 09:48:45'),
(20, 'How We Help', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 09:51:54', '2020-05-08 09:51:54'),
(21, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 09:53:43', '2020-05-08 09:53:43'),
(22, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 09:53:56', '2020-05-08 09:53:56'),
(23, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 09:54:09', '2020-05-08 09:54:09'),
(24, 'Better Days Start Today', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 10:01:43', '2020-05-08 10:01:43'),
(25, 'Better Days Start Today', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 10:02:24', '2020-05-08 10:02:24'),
(26, 'Funding You Need Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 10:50:07', '2020-05-08 10:50:07'),
(27, 'Funding You Need Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 11:03:10', '2020-05-08 11:03:10'),
(28, 'Funding You Need Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 11:03:41', '2020-05-08 11:03:41'),
(29, 'Funding You Need Data', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 11:04:30', '2020-05-08 11:04:30'),
(30, 'Funding You Need Data', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 11:06:05', '2020-05-08 11:06:05'),
(31, 'Funding You Need Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 11:09:27', '2020-05-08 11:09:27'),
(32, 'Funding You Need Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 11:10:29', '2020-05-08 11:10:29'),
(33, 'You Are Not Alone Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 11:15:42', '2020-05-08 11:15:42'),
(34, 'You Are Not Alone Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 11:16:05', '2020-05-08 11:16:05'),
(35, 'You Are Not Alone Videos', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 12:14:44', '2020-05-08 12:14:44'),
(36, 'You Are Not Alone Videos', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 12:21:16', '2020-05-08 12:21:16'),
(37, 'You Are Not Alone Videos', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 12:24:31', '2020-05-08 12:24:31'),
(38, 'Help Case Types', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 12:38:14', '2020-05-08 12:38:14'),
(39, 'Help Case Types', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 12:40:16', '2020-05-08 12:40:16'),
(40, 'Help Case Types', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 12:42:19', '2020-05-08 12:42:19'),
(41, 'Help Case Types Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 13:08:11', '2020-05-08 13:08:11'),
(42, 'Help Case Types Data', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 13:10:30', '2020-05-08 13:10:30'),
(43, 'Help Case Types Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 13:13:11', '2020-05-08 13:13:11'),
(44, 'Help Case Types Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 13:14:06', '2020-05-08 13:14:06'),
(45, 'Never Settle For Less', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 13:32:10', '2020-05-08 13:32:10'),
(46, 'Never Settle For Less', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 13:36:29', '2020-05-08 13:36:29'),
(47, 'Glossary Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:21:57', '2020-05-08 15:21:57'),
(48, 'Glossary Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:22:24', '2020-05-08 15:22:24'),
(49, 'Glossary Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:24:42', '2020-05-08 15:24:42'),
(50, 'Glossary Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:28:58', '2020-05-08 15:28:58'),
(51, 'Glossary Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:29:25', '2020-05-08 15:29:25'),
(52, 'Glossary Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:32:05', '2020-05-08 15:32:05'),
(53, 'Glossary Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:33:34', '2020-05-08 15:33:34'),
(54, 'Glossary Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:34:09', '2020-05-08 15:34:09'),
(55, 'Glossary Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:35:06', '2020-05-08 15:35:06'),
(56, 'Glossary Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:36:07', '2020-05-08 15:36:07'),
(57, 'Glossary Data', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 15:36:37', '2020-05-08 15:36:37'),
(58, 'Types Of Funding Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 16:10:05', '2020-05-08 16:10:05'),
(59, 'Types Of Funding Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 16:10:47', '2020-05-08 16:10:47'),
(60, 'Pre Settlement Funding', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 16:50:47', '2020-05-08 16:50:47'),
(61, 'Pre Settlement Funding', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 16:54:33', '2020-05-08 16:54:33'),
(62, 'Pre Settlement Funding', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 16:54:48', '2020-05-08 16:54:48'),
(63, 'Pre Settlement Funding', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 16:55:04', '2020-05-08 16:55:04'),
(64, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:22:05', '2020-05-08 17:22:05'),
(65, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:22:16', '2020-05-08 17:22:16'),
(66, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:22:29', '2020-05-08 17:22:29'),
(67, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:22:52', '2020-05-08 17:22:52'),
(68, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:23:14', '2020-05-08 17:23:14'),
(69, 'Hear About Us', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:28:08', '2020-05-08 17:28:08'),
(70, 'Hear About Us', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:28:29', '2020-05-08 17:28:29'),
(71, 'Hear About Us', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:29:43', '2020-05-08 17:29:43'),
(72, 'Hear About Us', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:29:57', '2020-05-08 17:29:57'),
(73, 'Hear About Us', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:30:11', '2020-05-08 17:30:11'),
(74, 'Pre Settlement Funding Types', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 17:59:52', '2020-05-08 17:59:52'),
(75, 'Cases We Fund Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 18:33:07', '2020-05-08 18:33:07'),
(76, 'Cases We Fund Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 18:33:40', '2020-05-08 18:33:40'),
(77, 'Cases We Fund Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 19:14:16', '2020-05-08 19:14:16'),
(78, 'Cases We Fund Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 19:15:31', '2020-05-08 19:15:31'),
(79, 'Cases We Fund Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 19:16:20', '2020-05-08 19:16:20'),
(80, 'Cases We Fund Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 19:17:08', '2020-05-08 19:17:08'),
(81, 'Cases We Fund Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 19:17:56', '2020-05-08 19:17:56'),
(82, 'Cases We Fund Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 19:18:36', '2020-05-08 19:18:36'),
(83, 'How It Works', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 20:13:46', '2020-05-08 20:13:46'),
(84, 'How It Works', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 20:14:31', '2020-05-08 20:14:31'),
(85, 'How It Works', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-08 20:18:17', '2020-05-08 20:18:17'),
(86, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:20:10', '2020-05-10 15:20:10'),
(87, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:20:25', '2020-05-10 15:20:25'),
(88, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:20:42', '2020-05-10 15:20:42'),
(89, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:20:54', '2020-05-10 15:20:54'),
(90, 'Case Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:21:11', '2020-05-10 15:21:11'),
(91, 'Hear About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:25:05', '2020-05-10 15:25:05'),
(92, 'Hear About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:25:18', '2020-05-10 15:25:18'),
(93, 'Hear About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:25:33', '2020-05-10 15:25:33'),
(94, 'Hear About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:25:43', '2020-05-10 15:25:43'),
(95, 'Hear About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-10 15:26:00', '2020-05-10 15:26:00'),
(96, 'Contact Me About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 13:23:09', '2020-05-11 13:23:09'),
(97, 'Contact Me About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 13:23:25', '2020-05-11 13:23:25'),
(98, 'Contact Me About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 13:23:40', '2020-05-11 13:23:40'),
(99, 'Contact Me About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 13:23:51', '2020-05-11 13:23:51'),
(100, 'Contact Me About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 13:24:01', '2020-05-11 13:24:01'),
(101, 'Contact Me About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 13:24:12', '2020-05-11 13:24:12'),
(102, 'Contact Me About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 13:24:21', '2020-05-11 13:24:21'),
(103, 'Contact Me About', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 13:24:33', '2020-05-11 13:24:33'),
(104, 'FAQ Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:23:37', '2020-05-11 14:23:37'),
(105, 'FAQ Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:24:03', '2020-05-11 14:24:03'),
(106, 'Resource Content Info', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:24:13', '2020-05-11 14:24:13'),
(107, 'FAQ Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:24:17', '2020-05-11 14:24:17'),
(108, 'FAQ Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:24:32', '2020-05-11 14:24:32'),
(109, 'FAQ Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:24:54', '2020-05-11 14:24:54'),
(110, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:30:18', '2020-05-11 14:30:18'),
(111, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:30:48', '2020-05-11 14:30:48'),
(112, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:31:46', '2020-05-11 14:31:46'),
(113, 'FAQ Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:33:39', '2020-05-11 14:33:39'),
(114, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:35:17', '2020-05-11 14:35:17'),
(115, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:36:37', '2020-05-11 14:36:37'),
(116, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:37:13', '2020-05-11 14:37:13'),
(117, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:37:49', '2020-05-11 14:37:49'),
(118, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:38:41', '2020-05-11 14:38:41'),
(119, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:39:40', '2020-05-11 14:39:40'),
(120, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:40:17', '2020-05-11 14:40:17'),
(121, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:40:55', '2020-05-11 14:40:55'),
(122, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:41:34', '2020-05-11 14:41:34'),
(123, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:42:09', '2020-05-11 14:42:09'),
(124, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:42:43', '2020-05-11 14:42:43'),
(125, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:44:03', '2020-05-11 14:44:03'),
(126, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:44:45', '2020-05-11 14:44:45'),
(127, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:45:21', '2020-05-11 14:45:21'),
(128, 'FAQ Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:46:40', '2020-05-11 14:46:40'),
(129, 'FAQ Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:46:49', '2020-05-11 14:46:49'),
(130, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:48:11', '2020-05-11 14:48:11'),
(131, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:49:03', '2020-05-11 14:49:03'),
(132, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:49:54', '2020-05-11 14:49:54'),
(133, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:51:13', '2020-05-11 14:51:13'),
(134, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:51:48', '2020-05-11 14:51:48'),
(135, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:52:36', '2020-05-11 14:52:36'),
(136, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:53:18', '2020-05-11 14:53:18'),
(137, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:54:06', '2020-05-11 14:54:06'),
(138, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:56:17', '2020-05-11 14:56:17'),
(139, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:57:06', '2020-05-11 14:57:06'),
(140, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:57:36', '2020-05-11 14:57:36'),
(141, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:58:22', '2020-05-11 14:58:22'),
(142, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:59:16', '2020-05-11 14:59:16'),
(143, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 14:59:51', '2020-05-11 14:59:51'),
(144, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:00:22', '2020-05-11 15:00:22'),
(145, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:00:53', '2020-05-11 15:00:53'),
(146, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:01:36', '2020-05-11 15:01:36'),
(147, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:02:11', '2020-05-11 15:02:11'),
(148, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:02:42', '2020-05-11 15:02:42'),
(149, 'FAQ Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:03:20', '2020-05-11 15:03:20'),
(150, 'Site Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:05:05', '2020-05-11 15:05:05'),
(151, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:05:15', '2020-05-11 15:05:15'),
(152, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 15:07:21', '2020-05-11 15:07:21'),
(153, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 16:06:40', '2020-05-11 16:06:40'),
(154, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 16:13:33', '2020-05-11 16:13:33'),
(155, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 16:22:28', '2020-05-11 16:22:28'),
(156, 'Slider', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 16:34:34', '2020-05-11 16:34:34'),
(157, 'Slider', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 16:34:40', '2020-05-11 16:34:40'),
(158, 'Slider', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 16:35:10', '2020-05-11 16:35:10'),
(159, 'Slider', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-11 16:49:41', '2020-05-11 16:49:41'),
(160, 'How We Help', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 02:26:32', '2020-05-12 02:26:32'),
(161, 'How We Help', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 02:29:42', '2020-05-12 02:29:42'),
(162, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 02:54:23', '2020-05-12 02:54:23'),
(163, 'How We Help', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 02:54:24', '2020-05-12 02:54:24'),
(164, 'Better Days Start', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 04:04:30', '2020-05-12 04:04:30'),
(165, 'Better Days Start', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 04:23:39', '2020-05-12 04:23:39'),
(166, 'Resource Content Info', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 04:28:50', '2020-05-12 04:28:50'),
(167, 'Resource Content Info', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 04:37:23', '2020-05-12 04:37:23'),
(168, 'Resource Content Info', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 04:37:45', '2020-05-12 04:37:45'),
(169, 'Slider', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 04:56:47', '2020-05-12 04:56:47'),
(170, 'Funding Need Page Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 05:00:50', '2020-05-12 05:00:50'),
(171, 'Funding You Need', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 05:21:56', '2020-05-12 05:21:56'),
(172, 'Funding You Need', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 05:22:23', '2020-05-12 05:22:23'),
(173, 'Funding You Need', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 05:23:00', '2020-05-12 05:23:00'),
(174, 'Funding You Need', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 05:26:27', '2020-05-12 05:26:27'),
(175, 'Resource Content Info', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:01:01', '2020-05-12 06:01:01'),
(176, 'YOU ARE NOT ALONE', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:04:31', '2020-05-12 06:04:31'),
(177, 'YOU ARE NOT ALONE', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:05:14', '2020-05-12 06:05:14'),
(178, 'Resource Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:06:34', '2020-05-12 06:06:34'),
(179, 'Resource Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:08:54', '2020-05-12 06:08:54'),
(180, 'Resource Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:10:03', '2020-05-12 06:10:03'),
(181, 'Resource Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:10:49', '2020-05-12 06:10:49'),
(182, 'You Are Not Alone Video', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:21:29', '2020-05-12 06:21:29'),
(183, 'You Are Not Alone Video', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:22:44', '2020-05-12 06:22:44'),
(184, 'You Are Not Alone Video', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 06:23:06', '2020-05-12 06:23:06'),
(185, 'Help On Many Case', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 09:56:23', '2020-05-12 09:56:23'),
(186, 'Help On Many Case', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:01:30', '2020-05-12 10:01:30'),
(187, 'Help On Many Case Types', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:03:39', '2020-05-12 10:03:39'),
(188, 'Help On Many Case Types', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:04:24', '2020-05-12 10:04:24'),
(189, 'Help On Many Case Types', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:04:52', '2020-05-12 10:04:52'),
(190, 'Never Settle For Less', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:39:00', '2020-05-12 10:39:00'),
(191, 'Glossary Section Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:48:15', '2020-05-12 10:48:15'),
(192, 'Glossary Section Content', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:48:52', '2020-05-12 10:48:52'),
(193, 'Glossary', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:51:10', '2020-05-12 10:51:10'),
(194, 'Glossary', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:51:46', '2020-05-12 10:51:46'),
(195, 'Glossary', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:52:57', '2020-05-12 10:52:57'),
(196, 'Glossary', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:53:23', '2020-05-12 10:53:23'),
(197, 'Glossary', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:53:41', '2020-05-12 10:53:41'),
(198, 'Glossary', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:54:01', '2020-05-12 10:54:01'),
(199, 'Glossary', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:54:21', '2020-05-12 10:54:21'),
(200, 'Glossary', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 10:54:41', '2020-05-12 10:54:41'),
(201, 'How It Works Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 12:56:09', '2020-05-12 12:56:09'),
(202, 'Terms Of Use', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 13:05:39', '2020-05-12 13:05:39'),
(203, 'Privacy Policy Page', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 13:27:30', '2020-05-12 13:27:30'),
(204, 'How it Works Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 13:34:35', '2020-05-12 13:34:35'),
(205, 'Faq Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 13:37:25', '2020-05-12 13:37:25'),
(206, 'Terms Of Use', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 13:44:49', '2020-05-12 13:44:49'),
(207, 'Terms Of Use', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 13:49:26', '2020-05-12 13:49:26'),
(208, 'State Specific Licenses', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 13:56:05', '2020-05-12 13:56:05'),
(209, 'Types Of Funding Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:01:01', '2020-05-12 14:01:01'),
(210, 'Resource Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:06:28', '2020-05-12 14:06:28'),
(211, 'Resource Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:07:52', '2020-05-12 14:07:52'),
(212, 'Resource Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:07:58', '2020-05-12 14:07:58'),
(213, 'Resource Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:08:09', '2020-05-12 14:08:09'),
(214, 'Resource Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:08:16', '2020-05-12 14:08:16'),
(215, 'Types Of Funding Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:09:32', '2020-05-12 14:09:32'),
(216, 'State Specific Licenses', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:09:56', '2020-05-12 14:09:56'),
(217, 'Types Of Funding Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:12:56', '2020-05-12 14:12:56'),
(218, 'Types Of Funding Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:15:44', '2020-05-12 14:15:44'),
(219, 'State Specific Licenses', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:16:05', '2020-05-12 14:16:05'),
(220, 'Resource Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:24:08', '2020-05-12 14:24:08'),
(221, 'Resource Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:24:35', '2020-05-12 14:24:35'),
(222, 'Resource Content', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:28:14', '2020-05-12 14:28:14'),
(223, 'Resource Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:37:12', '2020-05-12 14:37:12'),
(224, 'Resource Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:38:54', '2020-05-12 14:38:54'),
(225, 'Resource Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:39:26', '2020-05-12 14:39:26'),
(226, 'Type of Fund Page', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:42:32', '2020-05-12 14:42:32'),
(227, 'Type of Fund Page', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:43:30', '2020-05-12 14:43:30'),
(228, 'Type of Fund Page', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:44:53', '2020-05-12 14:44:53'),
(229, 'How It Works Do Not Settle For Less', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:48:52', '2020-05-12 14:48:52'),
(230, 'How It Works Do Not Settle For Less', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 14:52:07', '2020-05-12 14:52:07'),
(231, 'How It Works Do Not Settle Step', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:09:50', '2020-05-12 15:09:50'),
(232, 'How It Works Do Not Settle Step', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:10:28', '2020-05-12 15:10:28'),
(233, 'How It Works Do Not Settle Step', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:11:07', '2020-05-12 15:11:07'),
(234, 'How It Works Do Not Settle Step', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:12:27', '2020-05-12 15:12:27'),
(235, 'How It Work Cases We Fund', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:47:48', '2020-05-12 15:47:48'),
(236, 'How It Work Cases We Fund', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:49:16', '2020-05-12 15:49:16'),
(237, 'How It Work Securing The Money', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:56:13', '2020-05-12 15:56:13'),
(238, 'How It Work Securing The Money', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:56:42', '2020-05-12 15:56:42'),
(239, 'How It Work Securing The Money', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 15:57:38', '2020-05-12 15:57:38'),
(240, 'How It Works Do Not Settle Step', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:29:56', '2020-05-12 16:29:56'),
(241, 'How It Works Do Not Settle Step', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:30:33', '2020-05-12 16:30:33'),
(242, 'Types Of Funding Pre Settlement', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:31:17', '2020-05-12 16:31:17'),
(243, 'How It Works Do Not Settle Step', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:31:30', '2020-05-12 16:31:30'),
(244, 'Types Of Funding Pre Settlement', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:32:00', '2020-05-12 16:32:00'),
(245, 'Types Of Funding Pre Settlement', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:32:13', '2020-05-12 16:32:13'),
(246, 'Types Of Funding Pre Settlement', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:32:21', '2020-05-12 16:32:21'),
(247, 'How It Works Do Not Settle Step', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:38:10', '2020-05-12 16:38:10'),
(248, 'Funding Form', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:40:22', '2020-05-12 16:40:22'),
(249, 'How It Works Do Not Settle Step', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:40:47', '2020-05-12 16:40:47'),
(250, 'Funding Form', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 16:41:08', '2020-05-12 16:41:08'),
(251, 'How it Works Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 17:08:45', '2020-05-12 17:08:45'),
(252, 'Types Of Fund Cases We Fund Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 17:14:14', '2020-05-12 17:14:14'),
(253, 'Types Of Fund Cases We Fund Type', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 17:16:06', '2020-05-12 17:16:06'),
(254, 'Types Of Fund Cases We Fund Type', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 17:16:45', '2020-05-12 17:16:45'),
(255, 'Funding Form', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 17:26:32', '2020-05-12 17:26:32'),
(256, 'Funding Form', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 17:28:29', '2020-05-12 17:28:29'),
(257, 'Funding Form', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 17:28:52', '2020-05-12 17:28:52'),
(258, 'About Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:01:41', '2020-05-12 18:01:41'),
(259, 'About Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:03:08', '2020-05-12 18:03:08'),
(260, 'Types Of Funding Pre Settlement', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:04:35', '2020-05-12 18:04:35'),
(261, 'About Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:05:15', '2020-05-12 18:05:15'),
(262, 'Types Of Fund Cases We Fund Type', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:13:57', '2020-05-12 18:13:57'),
(263, 'About Milestones', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:21:57', '2020-05-12 18:21:57'),
(264, 'About Milestones', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:23:15', '2020-05-12 18:23:15'),
(265, 'About Milestones', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:23:32', '2020-05-12 18:23:32'),
(266, 'About Milestones', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:23:41', '2020-05-12 18:23:41'),
(267, 'About Milestones', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:23:55', '2020-05-12 18:23:55'),
(268, 'About Milestones', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:24:05', '2020-05-12 18:24:05'),
(269, 'Help On Many Case Types', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:26:45', '2020-05-12 18:26:45'),
(270, 'Help On Many Case Types', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:26:54', '2020-05-12 18:26:54'),
(271, 'Help On Many Case Types', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:27:00', '2020-05-12 18:27:00'),
(272, 'Help On Many Case Types', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:27:07', '2020-05-12 18:27:07'),
(273, 'Faq Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:43:31', '2020-05-12 18:43:31'),
(274, 'Meet Leader Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-12 18:46:53', '2020-05-12 18:46:53'),
(275, 'Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 00:53:18', '2020-05-13 00:53:18'),
(276, 'Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 01:05:35', '2020-05-13 01:05:35'),
(277, 'Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 04:46:57', '2020-05-13 04:46:57'),
(278, 'Team Member', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 04:47:01', '2020-05-13 04:47:01'),
(279, 'Team Member', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:04:58', '2020-05-13 05:04:58'),
(280, 'Team Member', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:05:03', '2020-05-13 05:05:03'),
(281, 'About Meet Our Team', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:11:57', '2020-05-13 05:11:57'),
(282, 'About Meet Our Team', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:12:10', '2020-05-13 05:12:10'),
(283, 'About Meet Our Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:32:21', '2020-05-13 05:32:21'),
(284, 'About Meet Our Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:33:15', '2020-05-13 05:33:15'),
(285, 'About Meet Our Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:33:37', '2020-05-13 05:33:37'),
(286, 'About Meet Our Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:34:04', '2020-05-13 05:34:04'),
(287, 'About Meet Our Team Member', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:38:17', '2020-05-13 05:38:17'),
(288, 'About Work At Oasis', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:46:38', '2020-05-13 05:46:38'),
(289, 'About Work At Oasis', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 05:47:27', '2020-05-13 05:47:27'),
(290, 'Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 08:26:05', '2020-05-13 08:26:05'),
(291, 'Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 08:27:34', '2020-05-13 08:27:34'),
(292, 'Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 08:28:53', '2020-05-13 08:28:53'),
(293, 'Team Member', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 08:30:16', '2020-05-13 08:30:16'),
(294, 'About Work At Advantage Lending', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 09:36:31', '2020-05-13 09:36:31'),
(295, 'About Work At Advantage Lending', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 09:37:23', '2020-05-13 09:37:23'),
(296, 'About Media Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 12:32:46', '2020-05-13 12:32:46'),
(297, 'About Media', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 12:47:20', '2020-05-13 12:47:20'),
(298, 'About Media', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 12:57:49', '2020-05-13 12:57:49'),
(299, 'About Media', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 13:00:04', '2020-05-13 13:00:04'),
(300, 'For Attorney Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 13:19:28', '2020-05-13 13:19:28'),
(301, 'For Attorney Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 13:30:35', '2020-05-13 13:30:35'),
(302, 'For Atterney Portal simplify', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 13:37:15', '2020-05-13 13:37:15'),
(303, 'For Attorney Known and Recognized', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 13:48:20', '2020-05-13 13:48:20'),
(304, 'For Attorney Known and Recognized', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 13:49:35', '2020-05-13 13:49:35'),
(305, 'For Attorney Known and Recognized', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 13:51:05', '2020-05-13 13:51:05'),
(306, 'For Attorney Settlement Funding Process', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 13:59:24', '2020-05-13 13:59:24'),
(307, 'For Attorney Settlement Funding Process', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:00:13', '2020-05-13 14:00:13'),
(308, 'For Attorney Settlement Funding Process', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:01:11', '2020-05-13 14:01:11'),
(309, 'For Attorney Product And Service', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:12:54', '2020-05-13 14:12:54'),
(310, 'For Attorney Product And Service', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:13:18', '2020-05-13 14:13:18'),
(311, 'For Attorney Product And Service', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:13:42', '2020-05-13 14:13:42'),
(312, 'For Attorney Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:17:14', '2020-05-13 14:17:14'),
(313, 'For Broker Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:46:13', '2020-05-13 14:46:13'),
(314, 'Contact Us', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:55:01', '2020-05-13 14:55:01'),
(315, 'Contact Us', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:56:36', '2020-05-13 14:56:36'),
(316, 'For Broker Page Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 14:57:34', '2020-05-13 14:57:34'),
(317, 'Contact Us', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-13 16:20:18', '2020-05-13 16:20:18'),
(318, 'Career Page Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 07:24:31', '2020-05-14 07:24:31'),
(319, 'Career Post', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 07:44:02', '2020-05-14 07:44:02'),
(320, 'Career Post', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 07:47:28', '2020-05-14 07:47:28'),
(321, 'Career Post', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 07:51:09', '2020-05-14 07:51:09'),
(322, 'Career Post', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 07:51:38', '2020-05-14 07:51:38'),
(323, 'Career Post', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 07:52:05', '2020-05-14 07:52:05'),
(324, 'Contact Us', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 08:10:40', '2020-05-14 08:10:40'),
(325, 'User Contact Us Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 11:07:46', '2020-05-14 11:07:46'),
(326, 'User Contact Us Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 11:07:57', '2020-05-14 11:07:57'),
(327, 'User Contact Us Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 11:08:02', '2020-05-14 11:08:02'),
(328, 'User Contact Us Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 11:08:21', '2020-05-14 11:08:21'),
(329, 'User Contact Us Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 11:09:55', '2020-05-14 11:09:55'),
(330, 'User Contact Us Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 11:10:35', '2020-05-14 11:10:35'),
(331, 'User Contact Us Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 11:18:26', '2020-05-14 11:18:26'),
(332, 'User Contact Us Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 11:19:14', '2020-05-14 11:19:14'),
(333, 'User For Attonreys Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:05:35', '2020-05-14 13:05:35'),
(334, 'User For Attonreys Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:11:17', '2020-05-14 13:11:17'),
(335, 'User For Attonreys Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:12:00', '2020-05-14 13:12:00'),
(336, 'User For Attonreys Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:16:48', '2020-05-14 13:16:48'),
(337, 'User Site Application Form', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:35:44', '2020-05-14 13:35:44'),
(338, 'User Site Application Form', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:36:07', '2020-05-14 13:36:07'),
(339, 'User Site Application Form', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:38:02', '2020-05-14 13:38:02'),
(340, 'User For Attonreys Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:39:53', '2020-05-14 13:39:53'),
(341, 'User For Attonreys Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:42:24', '2020-05-14 13:42:24'),
(342, 'User For Attonreys Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:42:52', '2020-05-14 13:42:52'),
(343, 'User Site Application Form', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:43:05', '2020-05-14 13:43:05'),
(344, 'User For Attonreys Request Submitted', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-05-14 13:43:36', '2020-05-14 13:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `application_forms`
--

CREATE TABLE `application_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_much_money_do_you_need` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `what_was_the_date_of_your_accident` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_case` int(11) DEFAULT '0',
  `state_case_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_type` int(11) DEFAULT '0',
  `case_type_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_did_you_heard` int(11) DEFAULT '0',
  `how_did_you_heard_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_should_we_contact_you` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT '0',
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attorney__first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attorney__last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `law_firm_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `law_firm_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_forms`
--

INSERT INTO `application_forms` (`id`, `first_name`, `last_name`, `how_much_money_do_you_need`, `what_was_the_date_of_your_accident`, `state_case`, `state_case_name`, `case_type`, `case_type_name`, `how_did_you_heard`, `how_did_you_heard_name`, `email`, `phone`, `how_should_we_contact_you`, `street_address`, `state`, `state_name`, `zip_code`, `attorney__first_name`, `attorney__last_name`, `law_firm_name`, `law_firm_phone`, `case_status`, `application_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'MD MAHAMUDUR', 'Bhuyan', '234234', '15/05/2020', 3, 'Arkansas', 2, 'Workers\' Compensation', 2, 'Online Advertising', 'f.bhuyian@gmail.com', '01860748020', 'Email,Text/SMS', '402, 87/B, Road 6, Monsurabad, Mohammodpur, Dhaka - 1207', 2, 'Alabama', '1207', 'MD MAHAMUDUR', 'Bhuyan', 'Test', '01860748020', NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-14 13:35:44', '2020-05-14 13:35:44'),
(2, 'MD MAHAMUDUR', 'Bhuyan', '234234', '15/05/2020', 3, 'Arkansas', 2, 'Workers\' Compensation', 2, 'Online Advertising', 'f.bhuyian@gmail.com', '01860748020', 'Email,Text/SMS', '402, 87/B, Road 6, Monsurabad, Mohammodpur, Dhaka - 1207', 2, 'Alabama', '1207', 'MD MAHAMUDUR', 'Bhuyan', 'Test', '01860748020', NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-14 13:36:07', '2020-05-14 13:36:07'),
(3, 'MD MAHAMUDUR', 'Bhuyan', '234234', '15/05/2020', 3, 'Arkansas', 2, 'Workers\' Compensation', 2, 'Online Advertising', 'f.bhuyian@gmail.com', '01860748020', 'Email,Text/SMS', '402, 87/B, Road 6, Monsurabad, Mohammodpur, Dhaka - 1207', 2, 'Alabama', '1207', 'MD MAHAMUDUR', 'Bhuyan', 'Test', '01860748020', NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-14 13:38:02', '2020-05-14 13:38:02'),
(4, 'MD MAHAMUDUR', 'Bhuyan', '234234234', 'Unknown Date', 2, 'Alabama', 4, 'Other', 2, 'Online Advertising', 'f.bhuyian@gmail.com', '01860748020', 'Email,Text/SMS', '402, 87/B, Road 6, Monsurabad, Mohammodpur, Dhaka - 1207', 18, 'Kentucky', '1207', 'MD MAHAMUDUR', 'Bhuyan', 'Test', '01860748020', NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-14 13:43:05', '2020-05-14 13:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `attorneys_forms`
--

CREATE TABLE `attorneys_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_me_about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_me_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `better_days_starts`
--

CREATE TABLE `better_days_starts` (
  `id` int(10) UNSIGNED NOT NULL,
  `content_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_detail` longtext COLLATE utf8mb4_unicode_ci,
  `content_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `better_days_starts`
--

INSERT INTO `better_days_starts` (`id`, `content_title`, `content_detail`, `content_image`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Better Days Start Today', 'When you’ve been injured in an accident, it can be difficult to make ends meet while you wait for your settlement money. You don’t have to struggle to pay bills — take control today and find peace of mind with help from Oasis.', 'advantage-lending.com_1589279019.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 04:23:39', '2020-05-12 04:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `career_page_settings`
--

CREATE TABLE `career_page_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_detail` longtext COLLATE utf8mb4_unicode_ci,
  `page_job_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_page_settings`
--

INSERT INTO `career_page_settings` (`id`, `title`, `background_image`, `background_forecolor`, `page_detail`, `page_job_title`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Carrers', 'advantage-lending.com_1589462671.jpeg', '#133d8d', '<h4 style=\"font-family: Oxygen, sans-serif; font-weight: bold; color: rgb(21, 21, 21); margin-bottom: 10px; font-size: 18px; padding: 0px; text-transform: capitalize; letter-spacing: 0.5px;\">Join The Team At Oasis Financial And Grow Your Career While Making A Difference For Others</h4><p style=\"margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; letter-spacing: 0.5px; color: rgb(85, 85, 85); font-family: &quot;Open Sans&quot;, sans-serif;\"><span class=\"s1\" style=\"color: rgb(0, 0, 0);\">Oasis Financial and our partner companies&nbsp;<a class=\"color_or\" href=\"https://www.keyhealth.net/Home/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"color: rgb(255, 116, 26); transition: all 0.3s ease-in-out 0s; font-weight: 700; line-height: 1.2;\"><span class=\"s2\">Key Health</span></a>&nbsp;and&nbsp;<a class=\"color_or\" href=\"https://www.accidentmeds.com/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"color: rgb(255, 116, 26); transition: all 0.3s ease-in-out 0s; font-weight: 700; line-height: 1.2;\"><span class=\"s2\">AccidentMeds</span></a>&nbsp;work hard every day to connect accident victims with medical care and the funds they need to pay bills while waiting for a lawsuit to settle. Since our founding in 1996, we’ve helped more than 250,000 consumers, and built relationships with more than 10,000 medical providers and 14,000 attorneys across the country. And we’re growing fast.</span></p><h4 style=\"font-family: Oxygen, sans-serif; font-weight: bold; color: rgb(21, 21, 21); margin-bottom: 10px; font-size: 18px; padding: 0px; text-transform: capitalize; letter-spacing: 0.5px;\">We Want People Who Want To Grow.</h4><p style=\"margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; letter-spacing: 0.5px; color: rgb(85, 85, 85); font-family: &quot;Open Sans&quot;, sans-serif;\"><span class=\"s1\" style=\"color: rgb(0, 0, 0);\">Grow personal talents and abilities. Grow a team. Help grow our business. At Oasis, you can grow in our energetic, entrepreneurial environment that values a strong work ethic, creativity, and care for others. We believe that best-in-class employees provide best-in-class services to our customers.</span></p><h4 style=\"font-family: Oxygen, sans-serif; font-weight: bold; color: rgb(21, 21, 21); margin-bottom: 10px; font-size: 18px; padding: 0px; text-transform: capitalize; letter-spacing: 0.5px;\">If This Sounds Like You, Join Us! Oasis Offers A Full Suite Of Competitive Benefits.</h4><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(85, 85, 85); font-family: &quot;Open Sans&quot;, sans-serif;\"><li class=\"p1\" style=\"list-style: square; margin: 0px 0px 0px 5rem; padding: 0px; color: rgb(0, 0, 0);\">Healthcare plans that include medical, dental and vision</li><li class=\"p1\" style=\"list-style: square; margin: 0px 0px 0px 5rem; padding: 0px; color: rgb(0, 0, 0);\">401(k) with employer match</li><li class=\"p1\" style=\"list-style: square; margin: 0px 0px 0px 5rem; padding: 0px; color: rgb(0, 0, 0);\">100% Company-paid life insurance</li><li class=\"p1\" style=\"list-style: square; margin: 0px 0px 0px 5rem; padding: 0px; color: rgb(0, 0, 0);\">Short- and long-term disability</li><li class=\"p1\" style=\"list-style: square; margin: 0px 0px 0px 5rem; padding: 0px; color: rgb(0, 0, 0);\">FSAs and pre-tax commuter program</li><li class=\"p1\" style=\"list-style: square; margin: 0px 0px 0px 5rem; padding: 0px; color: rgb(0, 0, 0);\">Paid holidays, paid time off and more</li><li class=\"p1\" style=\"list-style: square; margin: 0px 0px 0px 5rem; padding: 0px; color: rgb(0, 0, 0);\">BBB A+ rating</li><li class=\"p1\" style=\"list-style: square; margin: 0px 0px 0px 5rem; padding: 0px; color: rgb(0, 0, 0);\">Four-star Trustpilot rating</li></ul>', 'Current Openings', 'Active', NULL, NULL, NULL, NULL, '2020-05-14 07:24:31', '2020-05-14 07:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `career_posts`
--

CREATE TABLE `career_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `career_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career_detail` longtext COLLATE utf8mb4_unicode_ci,
  `career_link_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career_link_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_posts`
--

INSERT INTO `career_posts` (`id`, `career_title`, `career_detail`, `career_link_text`, `career_link_url`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Business Development Manager, Major Accounts (Arizona)', 'Market demands require that we accelerate our growth trajectory with a new Business Development Manager, Major Accounts position in Arizona. This role will build and grow relationships with new regional and national medical providers. Candidates should be goal-oriented, motivated and persistent. This is a remote sales position and candidates should expect to be on the road weekly. The ideal candidate will be based in Phoenix.', 'See full job description and application.', 'https://www.linkedin.com/jobs/view/1688881851?trk=cap_redirect', 'Active', NULL, NULL, NULL, NULL, '2020-05-14 07:44:02', '2020-05-14 07:44:02'),
(2, 'Business Development Manager, Midwest (MI/OH)', 'Oasis is seeking experienced and ambitious candidates for an Outside Sales role in the Midwest. Qualified candidates will earn commission, in addition to annual salary, for the product of the relationships they manage and cultivate. Qualified candidates should be road warriors who excel at building new relationships and strengthening existing ones. Legal experience would be an asset for this role, but is not required. Outside sales experience is required. Ideal candidates will be based in Detroit or Cleveland and have market knowledge of the Michigan and Ohio markets.', 'See full job description and application.', 'https://www.linkedin.com/jobs/view/1688881851?trk=cap_redirect', 'Active', NULL, NULL, NULL, NULL, '2020-05-14 07:47:29', '2020-05-14 07:47:29'),
(3, 'Business Development Manager, Major Accounts- Mid-Atlantic (VA/MD)', 'This role will build and grow relationships with new regional and national medical providers. Candidates should be goal-oriented, motivated and persistent. This is a remote sales position and candidates should expect to be on the road weekly. The ideal candidate will be based in the Virginia or Maryland metro area.', 'See full job description and application.', 'https://www.linkedin.com/jobs/view/1688881851?trk=cap_redirect', 'Active', NULL, NULL, NULL, NULL, '2020-05-14 07:51:09', '2020-05-14 07:51:09'),
(4, 'Business Development Manager, West (Los Angeles, CA)', 'The Business Development Manager position will be responsible for promoting and selling services to law firms to generate incremental revenue for the company. Success will be based upon developing and implementing sales and operational strategies to drive business, expand relationships and improve efficiencies between the company, law firms, medical providers, and other strategic partners. Ideal candidates will be based in the Los Angeles, California area and have market knowledge of California and surrounding states.', 'See full job description and application.', 'https://www.linkedin.com/jobs/view/1688881851?trk=cap_redirect', 'Active', NULL, NULL, NULL, NULL, '2020-05-14 07:51:38', '2020-05-14 07:51:38'),
(5, 'Director of Broker Relationships (Rosemont, IL)', 'Market demands require that we find a Director of Broker Relationships to build and grow relationships and cultivate strong partnerships. This position will be responsible for growing existing broker relationships while developing new ones. Candidates should be goal-oriented, motivated and persistent. This position is based in Oasis’s Rosemont, Illinois office, but other locations will be considered for strong candidates.', 'See full job description and application.', 'https://www.linkedin.com/jobs/view/1688881851?trk=cap_redirect', 'Active', NULL, NULL, NULL, NULL, '2020-05-14 07:52:05', '2020-05-14 07:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

CREATE TABLE `case_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_types`
--

INSERT INTO `case_types` (`id`, `name`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Auto Accident', NULL, NULL, NULL, NULL, '2020-05-10 15:20:10', '2020-05-10 15:20:10'),
(2, 'Workers\' Compensation', NULL, NULL, NULL, NULL, '2020-05-10 15:20:25', '2020-05-10 15:20:25'),
(3, 'Slip and Fall', NULL, NULL, NULL, NULL, '2020-05-10 15:20:43', '2020-05-10 15:20:43'),
(4, 'Other', NULL, NULL, NULL, NULL, '2020-05-10 15:20:54', '2020-05-10 15:20:54'),
(5, 'Social Security/Disablilty', NULL, NULL, NULL, NULL, '2020-05-10 15:21:11', '2020-05-10 15:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact_me_abouts`
--

CREATE TABLE `contact_me_abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_me_abouts`
--

INSERT INTO `contact_me_abouts` (`id`, `name`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Applying for money', NULL, NULL, NULL, NULL, '2020-05-11 13:23:09', '2020-05-11 13:23:09'),
(2, 'Status of my application', NULL, NULL, NULL, NULL, '2020-05-11 13:23:25', '2020-05-11 13:23:25'),
(3, 'My payoff', NULL, NULL, NULL, NULL, '2020-05-11 13:23:40', '2020-05-11 13:23:40'),
(4, 'Structured settlements', NULL, NULL, NULL, NULL, '2020-05-11 13:23:51', '2020-05-11 13:23:51'),
(5, 'Inheritance funding', NULL, NULL, NULL, NULL, '2020-05-11 13:24:01', '2020-05-11 13:24:01'),
(6, 'Questions about Oasis', NULL, NULL, NULL, NULL, '2020-05-11 13:24:12', '2020-05-11 13:24:12'),
(7, 'Media inquiries', NULL, NULL, NULL, NULL, '2020-05-11 13:24:21', '2020-05-11 13:24:21'),
(8, 'Seeking an attorney', NULL, NULL, NULL, NULL, '2020-05-11 13:24:33', '2020-05-11 13:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact_requests`
--

CREATE TABLE `contact_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_about` int(11) DEFAULT '0',
  `contact_about_Reviewed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_case` int(11) DEFAULT '0',
  `state_case_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_requests`
--

INSERT INTO `contact_requests` (`id`, `first_name`, `last_name`, `contact_about`, `contact_about_Reviewed`, `state_case`, `state_case_name`, `phone`, `email`, `message`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'MD MAHAMUDUR', 'Bhuyan', 1, 'Applying for money', 3, 'Arkansas', '01860748020', 'f.bhuyian@gmail.com', 'asdasdasdasdasdsad', NULL, NULL, NULL, NULL, '2020-05-14 11:09:55', '2020-05-14 11:09:55'),
(6, 'MD MAHAMUDUR', 'Bhuyan', 1, 'Applying for money', 3, 'Arkansas', '01860748020', 'f.bhuyian@gmail.com', 'asdasdasdasdasdsad', NULL, NULL, NULL, NULL, '2020-05-14 11:10:35', '2020-05-14 11:10:35'),
(7, 'MD MAHAMUDUR', 'Bhuyan', 1, 'Applying for money', 3, 'Arkansas', '01860748020', 'f.bhuyian@gmail.com', 'asdasdasdasdasdsad', NULL, NULL, NULL, NULL, '2020-05-14 11:18:26', '2020-05-14 11:18:26'),
(8, 'MD MAHAMUDUR', 'Bhuyan', 1, 'Applying for money', 2, 'Alabama', '01860748020', 'f.bhuyian@gmail.com', 'asdsadasdasd', NULL, NULL, NULL, NULL, '2020-05-14 11:19:14', '2020-05-14 11:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_heading` longtext COLLATE utf8mb4_unicode_ci,
  `form_bottom_content` longtext COLLATE utf8mb4_unicode_ci,
  `form_button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `title`, `background_image`, `background_forecolor`, `form_heading`, `form_bottom_content`, `form_button_text`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'advantage-lending.com_1589403301.jpeg', '#133d8d', 'Thank you for exploring <a class=\"color_or\" href=\"https://www.advantage-lending.com\"><span class=\"s2\">advantage-lending</span></a>. Don’t hesitate to contact us with other questions. <span class=\"s3\">Use the simple form below, <a class=\"toolti color_or\" data-original-title=\"(866) 523-1323\" href=\"tel:866.523.1323\">call us</a>, or <a class=\"color_or\" href=\"\">start a chat</a>. Our friendly team is happy to help!</span>', '<div class=\"contact_info\" style=\"padding-top: 3rem; color: rgb(85, 85, 85); font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><h3 style=\"font-family: Oxygen, sans-serif; font-weight: bold; color: rgb(21, 21, 21); margin-bottom: 10px; font-size: 24px; padding: 0px; text-transform: capitalize; letter-spacing: 0.5px;\">Call Advantage-Lending!</h3><p class=\"p1\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; letter-spacing: 0.5px; color: rgb(0, 0, 0);\"><span class=\"s1\">Apply for funding<a class=\"text-secondary\" href=\"https://www.advantage-lending.com/es/complete-su-solicitud/#\" style=\"color: rgb(51, 122, 183); transition: all 0.3s ease-in-out 0s;\"><small style=\"font-size: 13.6px;\">&nbsp;</small></a><small style=\"font-size: 13.6px;\"><a class=\"color_or\" href=\"tel:877.333.6680\" style=\"color: rgb(255, 116, 26); transition: all 0.3s ease-in-out 0s; font-weight: 700; line-height: 1.2;\">(877) 333-6680</a></small></span></p><p class=\"p1\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; letter-spacing: 0.5px; color: rgb(0, 0, 0);\"><span class=\"s1\">Check on your application&nbsp;</span><span class=\"s2\"><a class=\"color_or\" href=\"tel:866.769.3064\" style=\"color: rgb(255, 116, 26); transition: all 0.3s ease-in-out 0s; font-weight: 700; line-height: 1.2;\">866.769.3064</a></span></p></div><div class=\"contact_info\" style=\"padding-top: 3rem; color: rgb(85, 85, 85); font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><h3 style=\"font-family: Oxygen, sans-serif; font-weight: bold; color: rgb(21, 21, 21); margin-bottom: 10px; font-size: 24px; padding: 0px; text-transform: capitalize; letter-spacing: 0.5px;\">Media Inquiries</h3><p class=\"p2\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; letter-spacing: 0.5px; color: rgb(0, 0, 0);\"><span class=\"s1\">Please select&nbsp;<span style=\"font-weight: 700;\">Media Inquiries</span>&nbsp;in the form’s dropdown menu.<br></span></p></div><div class=\"contact_info\" style=\"padding-top: 3rem; color: rgb(85, 85, 85); font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><h3 style=\"font-family: Oxygen, sans-serif; font-weight: bold; color: rgb(21, 21, 21); margin-bottom: 10px; font-size: 24px; padding: 0px; text-transform: capitalize; letter-spacing: 0.5px;\">Corporate Headquarters</h3><p class=\"p2\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; letter-spacing: 0.5px; color: rgb(0, 0, 0);\"><span class=\"s1\">Oasis Financial<br><a class=\"color_or\" href=\"https://goo.gl/maps/85aQR1JagZT2\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(255, 116, 26); transition: all 0.3s ease-in-out 0s; font-weight: 700; line-height: 1.2;\">9525 West Bryn Mawr Avenue, Suite 900<br>Rosemont, Illinois 60018</a></span></p><p class=\"p2\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; letter-spacing: 0.5px; color: rgb(0, 0, 0);\"><span class=\"s1\">With regional offices located throughout the U.S.</span></p></div>', 'Continue', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 14:55:01', '2020-05-14 08:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `name`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'General Questions', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:23:37', '2020-05-11 14:23:37'),
(2, 'Financial', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:24:03', '2020-05-11 14:24:03'),
(3, 'After You Apply', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:24:17', '2020-05-11 14:24:17'),
(4, 'Types of Funding', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:24:32', '2020-05-11 14:24:32'),
(5, 'Case Types', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:24:54', '2020-05-11 14:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `faq_contents`
--

CREATE TABLE `faq_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `category_id_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_contents`
--

INSERT INTO `faq_contents` (`id`, `category_id`, `category_id_name`, `content_title`, `content_detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'General Questions', 'Should I be willing to take a lower settlement during the COVID-19 outbreak?', 'With so much financial uncertainty, it may be tempting to take a lower settlement in the interest of obtaining much-needed cash quickly. Negotiating a settlement without full information will be difficult, as you likely don’t yet have a full understanding of what your injuries are and how much the claim is truly worth. If you can afford  to wait or find alternate sources of financial support while you wait, you will have a better chance of getting a fair dollar value on your injury claim.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:30:48', '2020-05-11 14:30:48'),
(2, 1, 'General Questions', 'What is pre-settlement funding?', 'Pre-settlement funding is when a company gives you money right away in exchange for the right to receive a portion of your financial settlement in the future. You get money immediately to pay bills and pay nothing back until you get money from the settlement of your claims. If you never get money from your claims, you never have to pay anything back to the legal funding company (the official term for this is “non-recourse”).\r\nPre-settlement funding is sometimes called consumer legal funding, This type of legal funding is not a loan; there is no debt, no monthly payments, and no risk of collections calls or wage garnishments. Any money paid to the legal funding company comes only out of the proceeds of the settlement, never out of your pocket.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:31:46', '2020-05-11 14:33:39'),
(3, 1, 'General Questions', 'I don’t have an attorney. What do I do?', 'Advantage lending works with a network of attorneys, and can help connect you to one. Learn more.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:35:17', '2020-05-11 14:35:17'),
(4, 1, 'General Questions', 'What does non-recourse mean?', 'Funding that is non-recourse means it doesn’t have to be paid back if you lose your case. When you work with advantage lending, we offer to buy part of the proceeds you could receive from your settlement for money now, to help you get by until the rest of your settlement comes in. It’s not a loan — it’s a purchase. Because it’s a purchase, qualifying for funding isn’t based on your credit score (like loans are), and it can never put you into collections (like loans can). Because it’s a purchase, if you lose your case, you owe us nothing. Non-recourse pre-settlement funding can be a safe, stable alternative to taking out a loan while you wait, and can help you get back on your feet after an accident.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:36:37', '2020-05-11 14:36:37'),
(5, 1, 'General Questions', 'What is the process?', 'There are four easy steps to receive your pre-settlement funding.\r\n\r\nApply — Make sure you have your case information and attorney’s contact information. It’s also important to tell your attorney you are applying for funding on your legal claim so they can expect a call from Oasis; we contact them to verify your case details.\r\nApproval — Oasis reviews the information provided, and if you are qualified you’ll receive an approval notice and the contract to sign. Make sure you review and fully complete your contract before signing, and ask any questions you may have. Your attorney will also receive an acknowledgement to sign.\r\nFollow Up — After Oasis receives your signed contract and your attorney’s acknowledgement, we’ll process the request. You’ll receive a timeline and instructions about calling back if you don’t receive confirmation by the end of the timeline.\r\nReceive Funds — Oasis sends money the same day if possible using your selected method (Western Union, check or bank transfer) or the next day if it’s past the deadline (4PM CST).', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:37:13', '2020-05-11 14:37:13'),
(6, 1, 'General Questions', 'What types of cases qualify?', 'Many different kinds of personal injury cases qualify. Learn more.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:37:49', '2020-05-11 14:37:49'),
(7, 1, 'General Questions', 'Is the defendant’s insurance company notified?', 'No, the only parties aware of your transaction are you as the plaintiff, your attorney, and advantage lending Financial.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:38:41', '2020-05-11 14:38:41'),
(8, 2, 'Financial', 'Is good credit necessary to qualify for money?', 'Your credit score is never considered in the approval process.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:39:41', '2020-05-11 14:39:41'),
(9, 2, 'Financial', 'How long does it take to get money?', 'Often you can get your money the same day your application is approved for funding. The time it takes to approve funding varies based on the details of your case and the availability of your attorney. On average, the application review takes about two business days from the time we speak with your attorney.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:40:17', '2020-05-11 14:40:17'),
(10, 2, 'Financial', 'How much money can I expect to receive?', 'As a responsible financial firm, we typically limit the funding to about 10% of our estimate of potential case value ($500 to $100,000 is available — sometimes more depending on your case). This helps ensure that you receive sufficient proceeds from the settlement.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:40:55', '2020-05-11 14:40:55'),
(11, 2, 'Financial', 'How is the money repaid?', 'The money is only paid from the proceeds of your case settlement.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:41:34', '2020-05-11 14:41:34'),
(12, 2, 'Financial', 'What if I lose my case?', 'You keep the money and you owe nothing.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:42:09', '2020-05-11 14:42:09'),
(13, 2, 'Financial', 'How much does it cost?', 'Pricing for funding is determined by the specifics of your case. Apply for free and get full pricing details upon approval. Fees are competitive, and you pay nothing out of pocket — payment comes out of the settlement. You owe nothing if you don’t win your case.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:42:44', '2020-05-11 14:42:44'),
(14, 3, 'After You Apply', 'What do I do after I apply?', 'Once you’ve applied, there are three easy things you should do.\r\n\r\n1.Call your attorney. It’s important to notify your attorney of your application, as Oasis will contact them to confirm case details, sign the contract, and complete the process.\r\n2.Check your texts and email. Oasis will send you updates on your application status.\r\n3.Make sure your phone is on. Oasis will contact you when you application is approved to discuss how to transfer your funds.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:44:03', '2020-05-11 14:44:03'),
(15, 3, 'After You Apply', 'What do I tell my attorney?', 'Simply let them know you applied for financing with Oasis and that we will be contacting them. We ask your attorney to provide additional case details needed in the review process.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:44:45', '2020-05-11 14:46:40'),
(16, 3, 'After You Apply', 'Can I apply for additional funding?', 'Yes. If you have already received funding from Oasis and need more, you can apply for additional funding by completing a free application online or by phone. The additional funding process is as simple and easy as the first funding.\r\n\r\nOasis will review any case updates or changes with you or your attorney. Oasis may reach out to you and your attorney for additional information, so make sure to provide current attorney information, phone number, and email address when applying for additional funding.\r\n\r\nIf you are approved for additional funding, Oasis will notify you of the approval. You will then sign the Oasis Financial contract and your attorney will sign our acknowledgment form for the funding.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:45:21', '2020-05-11 14:46:49'),
(17, 3, 'After You Apply', 'What happens if my application is declined?', 'There are some common reasons why Oasis cannot provide funding on a case. Refer to these tips which may help..\r\n\r\nYour paperwork is incomplete. Make sure to properly complete all required portions of your contract. In order to provide you with funding, we need to receive signed and complete copies of paperwork from you. Make sure to check your email and phone if Oasis needs to reach you for questions or updates.\r\nWe didn’t hear from your attorney. Make sure to let your attorney know that you have applied for funding and that we will be contacting them. In order to provide funding on your case, Oasis needs to hear from your attorney before providing you the funding.\r\nIt’s not a case we can fund. Oasis provides funding on many different types of cases. Learn more about the types of cases Oasis can fund here.\r\nOther reasons. There may be other reasons or circumstances why Oasis has not been able to provide you with funding. Our team will provide as much information as possible and let you know when you can re-apply for funding with Oasis.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:48:11', '2020-05-11 14:48:11'),
(18, 3, 'After You Apply', 'What happens after my case is settled or resolved?', 'Once your case resolves, Oasis makes the process efficient and simple. We have a dedicated team of service representatives to answer questions from you or your attorney.\r\n\r\nIf there is no recovery on your case, you get to keep the funds you received from advantage lending. There is no risk for you. Please have your attorney contact Oasis if there is no recovery or settlement on your case.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:49:03', '2020-05-11 14:49:03'),
(19, 3, 'After You Apply', 'Where can I get a copy of my payoff?', 'If at any time you or your attorney need a payoff, email payoffs@oasisfinancial.com or call (888) 529-1253. Your attorney will submit payment directly to advantage lending.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:49:54', '2020-05-11 14:49:54'),
(20, 3, 'After You Apply', 'How does Oasis Financial help me get a fair settlement?', 'People who experience an injury that wasn’t their fault — people like you — often face the added insult of mounting financial problems, from lost income or costly medical bills to falling behind on rent. To make matters worse, the defendant, who may take advantage of your financial situation, is usually in no hurry to settle for fair value. Without Oasis Financial, plaintiffs might have to settle too soon for too little just to avoid bankruptcy. A cash lifeline from advantage lending Financial “levels the playing field” by giving you and your attorney the time needed to negotiate a fair settlement.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:51:13', '2020-05-11 14:51:13'),
(21, 3, 'After You Apply', 'Why was my case declined?', 'We know that people who are applying with Oasis have an urgent need for funding and are looking for help, quickly. We genuinely wish we could help all our applicants, but sometimes we cannot. Here are some of the most common reasons we have to decline an application.\r\n\r\nWe do not fund in your state: In certain states, some regulations make funding difficult. As a result, we don’t currently provide funding in Arkansas, Kansas, Kentucky, Maryland, Nevada, North Carolina, or West Virginia. We continue to work with state legislators to try and make funding fast, fair and available in all states. In fact, we are founding members of ARC, the Alliance for Responsible Consumer Legal Funding, an association dedicated to preserving consumer legal funding through advocacy at the state and federal levels.\r\nYour case is too new – While every case is different, in general it is helpful to our underwriting process to review the case at least 30 days after the accident date. We need enough information about the accident to make a funding decision. This may include information about the defendant and their carriers, information about the damages sustained, an acceptance of liability, etc., all of which take some time after an accident to be established.\r\nYou don’t have an attorney – We will not process a funding request unless you have an active case with a licensed attorney, and we are able to work with that attorney to determine your eligibility. Be very cautious if the funding company you are working with does not require the participation of your legal counsel. No one knows your case and will advocate for your best possible outcome like your attorney. If you don’t have an attorney – but would like one – Oasis may be able to help. Find out more.\r\nWe want you to be satisfied at settlement – One of our goals in providing pre-settlement funding is to not only help you get money now to cover immediate needs, but to try and make sure you’re satisfied with your settlement check. Sometimes the amount you are requesting (either with a first request or based on additional requests) may mean that when your case ultimately settles, there are fewer dollars left for you to have a satisfactory outcome. Be cautious of funding companies willing to overextend funding.\r\nWe are unable to obtain necessary information – Often applicants, in their rush for help, don’t provide accurate contact information for themselves or for their attorney. Please make sure we have your accurate information, and be on the lookout for calls, texts or emails (depending on your selected contact preferences) from us to answer any questions we may have. It’s equally important for you to you contact your attorney and tell them of your desire for funding and to give them permission to speak to us. If we don’t have the information we need, we’ll make several attempts to contact you and/or your attorney, but if we can’t gather the necessary information, we will have to decline the case.\r\nYour case doesn’t meet our guidelines – While your credit score is never a factor in our funding decision, other financial liabilities including bankruptcies and liens such as child support can disqualify you from funding. Once any liens are satisfied, you are welcome to reapply for funding.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:51:48', '2020-05-11 14:51:48'),
(22, 4, 'Types of Funding', 'What is pre-settlement funding?', 'Pre-settlement funding is a cash advance from your legal settlement. It’s a safe, risk-free payment we offer you based on what your case is worth. You agree to pay back the amount plus fees and interest once the case settles. Because all repayment comes from your settlement, there’s no risk if you don’t win your case. You can use this money to give yourself breathing room to pay bills, stay current, and get back to your life. Find out how it works.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:52:36', '2020-05-11 14:52:36'),
(23, 4, 'Types of Funding', 'What are structured settlements?', 'Plaintiffs in a structured settlement have been offered smaller regular payments over time, instead of a large one-time payment at the end of a case. Learn how Oasis can help.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:53:18', '2020-05-11 14:53:18'),
(24, 4, 'Types of Funding', 'What is inheritance funding?', 'Inheritance funding is an advance against money you have been granted but is currently tied up in probate. Learn more about how Oasis can help.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:54:06', '2020-05-11 14:54:06'),
(25, 5, 'Case Types', 'Auto and Motor Vehicle Accidents <smal> (includes Passenger Injury)</smal>', 'Ranging from fender benders to t-bone collisions, auto accidents are commonly the result of negligent driving. Motorists who are distracted, aggressive, or under the influence can cause major damage, and may be held responsible for a plaintiff’s medical bills, prescription drug costs, and compensation for lost wages. These cases involve everything from small passenger cars to large semi-trucks, and can include both injured drivers and passengers.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:56:17', '2020-05-11 14:56:17'),
(26, 5, 'Case Types', 'Workers\' Compensation', 'Workers’ Compensation laws were created to protect injured workers by providing for medical care, compensation for lost wages related to the injury, and rehabilitation and/or retraining if necessary. Almost half of all workplace injuries are serious enough to cause the employee to miss work or require ongoing medical care.\r\n\r\nBecause paying these claims can be costly, employers don’t always believe they are legitimate, creating undue delays in resolving them. Plaintiffs are responsible for proving the employer was “at fault” in order to receive a settlement.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:57:06', '2020-05-11 14:57:06'),
(27, 5, 'Case Types', 'Civil Rights', 'Civil rights claims can result from a wide variety of discriminatory misconduct, including misconduct regarding age, disability, pregnancy, race, and religious discrimination — as well as different types of harassment charges. While the actions prompting these claims may not leave a person with a physical injury, they can cause significant stress and psychological damage for the claimant, making it difficult to perform at one’s fullest potential, resulting in a lack of career momentum and missed financial gain.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:57:36', '2020-05-11 14:57:36'),
(28, 5, 'Case Types', 'Construction Negligence', 'Construction negligence claims stem from accidents caused by unsafe construction sites, improper equipment and/or training, faulty machinery, and other dangerous work conditions. For construction workers injured on the job, employers may be held responsible for a plaintiff’s medical bills, prescription drug costs, and compensation for lost wages.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:58:22', '2020-05-11 14:58:22'),
(29, 5, 'Case Types', 'FELA (Railroad)', 'Similar to Workers’ Compensation, the Federal Employer’s Liability Act (FELA) provides compensation for railroad workers injured on the job. Almost any worker employed by a railroad company, even those whose primary responsibilities are not performed in or around trains, is protected under the FELA.\r\n\r\nThe degree of negligence the plaintiff must show under FELA (usually due to the railroad, its employees, or an equipment manufacturer) is actually less than “no fault” Workers’ Comp. However, FELA requires a higher burden of proof by the courts than Workers’ Comp, so FELA litigation can last much longer.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:59:16', '2020-05-11 14:59:16'),
(30, 5, 'Case Types', 'General Negligence', 'When a plaintiff becomes injured due to improper care of property and/or possessions, they can pursue a General Negligence lawsuit. These claims cover a broad range of specific complaints including animal bites, amusement park injuries, bicycle and pedestrian accidents, plus homeowner and nursing home negligence.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 14:59:51', '2020-05-11 14:59:51'),
(31, 5, 'Case Types', 'Jones Act (Maritime)', 'The Jones Act protects maritime workers involved in accidents while at work. Sailors can receive damages due to vessel, captain, or crew negligence. Claimants must prove that their employers were negligent or “at fault,” similar to Workers’ Comp cases.  \r\n\r\nHowever, “comparative fault” is involved here. If the employer can prove that the plaintiff’s actions contributed to or caused the accident, the amount of the award can be reduced accordingly.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 15:00:22', '2020-05-11 15:00:22'),
(32, 5, 'Case Types', 'Pedestrian Injury', 'Pedestrian injury is very common, and can occur due to unsafe conditions or collisions with motor vehicles, motorcycles, bicycles, scooters, or skateboards. Injuries caused through another party’s negligence can result in compensation for a plaintiff’s medical bills, prescription drug costs, and lost wages.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 15:00:53', '2020-05-11 15:00:53'),
(33, 5, 'Case Types', 'Premises Negligence (Slip and Fall)', 'If you were injured on another’s property and the property owner failed to warn you of the possible hazard, the owner may be found negligent and liable. Premise liability lawsuits encompass a wide range of accidents, but “slip and fall” cases are the most common.\r\n\r\nThis type of injury can occur on private or public property and can be caused by uneven or cracked sidewalks, poorly lit pathways, slippery or unbalanced floors, potholes, ripped carpet or rugs, and even bad weather.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 15:01:36', '2020-05-11 15:01:36'),
(34, 5, 'Case Types', 'Workplace Negligence', 'A job-related injury is typically covered by Workers’ Comp insurance. However, if the injury involved negligence on the part of the employer, a fellow employee or a product, tool or machine produced by a third party, a workplace negligence lawsuit may be filed. These are often handled outside of the state-specific Workers’ Comp “no-fault” claims process.\r\n\r\nSince these cases are not considered “no fault,” it is the claimant’s burden to prove that the other party is liable.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 15:02:11', '2020-05-11 15:02:11'),
(35, 5, 'Case Types', 'Wrongful Death', 'The loss of a loved one caused by the actions or negligence of someone else can result in a Wrongful Death suit. These claims most commonly entail medical malpractice, fatal car accidents, or when a victim is intentionally killed, and are filed by representatives of the victim’s estate.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 15:02:42', '2020-05-11 15:02:42'),
(36, 5, 'Case Types', 'What is an “at fault” case?', 'In many personal injury cases, a plaintiff must be able to prove that the defendant was “at fault” or responsible for the accident or negligence causing the injury. The burden of proof is typically placed on the plaintiff in order to receive damages.', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 15:03:20', '2020-05-11 15:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `faq_page_settings`
--

CREATE TABLE `faq_page_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_page_settings`
--

INSERT INTO `faq_page_settings` (`id`, `title`, `background_image`, `background_forecolor`, `form_title`, `form_detail`, `form_button_text`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'FAQ', 'advantage-lending.com_1589312245.jpeg', '#133d8d', 'Need Help? Ready To Get Started?', 'Contact our team toll-free at (877) 333-6680, or start our free, no obligation application.', 'Continue', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 13:37:25', '2020-05-12 18:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `for_atterney_portal_simplifies`
--

CREATE TABLE `for_atterney_portal_simplifies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `for_atterney_portal_simplifies`
--

INSERT INTO `for_atterney_portal_simplifies` (`id`, `title`, `detail`, `background_image`, `background_forecolor`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Portal simplifies', 'Our Attorney Portal simplifies case administration so you can spend your time doing things that matter to your case. Easily manage status reports, administrative needs, payoff requests and other tasks — all quickly handled in our online environment.\r\n\r\nRequest additional funding\r\nRequest contract copies\r\nAdd case details and documents\r\nProvide servicing status\r\nView payoff amounts\r\nSubmit e-payments\r\nAlready registered to use the portal? Log in now. Need to register? Call us toll-free at (800) 741-1667 or use the contact form below.', 'advantage-lending.com_1589398635.jpg', '#FF741A', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 13:37:15', '2020-05-13 13:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `for_attorney_known_and_recognizeds`
--

CREATE TABLE `for_attorney_known_and_recognizeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `primary_background_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_background_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_short_detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `for_attorney_known_and_recognizeds`
--

INSERT INTO `for_attorney_known_and_recognizeds` (`id`, `title`, `detail`, `primary_background_color`, `secondary_background_color`, `video_background_image`, `youtube_link`, `video_by`, `video_location`, `video_short_detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nationally Known and Recognized', 'AL has worked with thousands of attorneys to help alleviate plaintiff burdens. Our service gives you the time you need to outlast insurance companies and see cases settle for their full, fair value, all with a company you can trust.', '#2f344e', '#262a40', 'advantage-lending.com_1589399300.png', 'https://www.youtube.com/watch?v=NsP9kLDy-Qg', 'Joyce', 'Palm Bay, FL', '“I wasn’t receiving any money at all, not even from the insurance company, and Oasis came through… They’re just fantastic!”', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 13:48:20', '2020-05-13 13:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `for_attorney_page_settings`
--

CREATE TABLE `for_attorney_page_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_detail` longtext COLLATE utf8mb4_unicode_ci,
  `page_products_services_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_settlement_funding_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `for_attorney_page_settings`
--

INSERT INTO `for_attorney_page_settings` (`id`, `title`, `background_image`, `background_forecolor`, `page_title`, `page_detail`, `page_products_services_title`, `page_settlement_funding_title`, `form_title`, `form_detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'For Attorneys', 'advantage-lending.com_1589397569.jpeg', '#133d8d', 'Your Best Case Scenario', 'No one works harder to make it easier for you to help your client recover physically and financially from an accident. Our top-rated pre-settlement funding provides relief during challenging times, and through our acquisition of Key Health, a premier medical lien company, and AccidentMeds, a nationwide prescription card service, Oasis Financial offers the most comprehensive products and services to alleviate burdens.\r\n\r\nFounded in 2003 by attorneys who saw a specific need, Oasis helps bridge the gap between your client’s current financial struggles and future settlement.', 'Comprehensive Products & Services', 'Our pre-settlement funding process is:', 'Here to Help', '<p>Looking for more information? Has your client asked you about Oasis Financial?</p>\r\n                        <p>Contact us below or call <a class=\"color_or\" href=\"tel:877.333.6680\">(877) 333-6680</a>&nbsp;to receive a quick, informative response.</p>', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 13:19:29', '2020-05-13 14:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `for_attorney_product_and_services`
--

CREATE TABLE `for_attorney_product_and_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `link_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `for_attorney_product_and_services`
--

INSERT INTO `for_attorney_product_and_services` (`id`, `logo`, `detail`, `link_text`, `link_url`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'advantage-lending.com_1589400774.png', 'Industry-leading pre-settlement funding to cover day-to-day expenses and Express Cash for Care™ to cover medical expenses for providers that won’t accept liens', 'Learn More', '#appointment', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 14:12:54', '2020-05-13 14:12:54'),
(2, 'advantage-lending.com_1589400798.png', 'Hassle-free medical lien solutions with no fees and no interest', 'Learn More', '#appointment', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 14:13:18', '2020-05-13 14:13:18'),
(3, 'advantage-lending.com_1589400822.png', 'Pharmacy card program accepted at 65,000+ pharmacies', 'Learn More', '#appointment', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 14:13:42', '2020-05-13 14:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `for_attorney_settlement_funding_processes`
--

CREATE TABLE `for_attorney_settlement_funding_processes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `block_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `for_attorney_settlement_funding_processes`
--

INSERT INTO `for_attorney_settlement_funding_processes` (`id`, `title`, `detail`, `block_image`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Efficient', 'Minimal phone calls or paperwork keeps you moving forward, allowing you to focus on the case itself. Use our Attorney Portal for even more advantages.', 'advantage-lending.com_1589399964.svg', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 13:59:24', '2020-05-13 13:59:24'),
(2, 'Easy', 'Our streamlined turnaround includes prompt acknowledgements and offers conveniences like digital signatures.', 'advantage-lending.com_1589400013.svg', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 14:00:13', '2020-05-13 14:00:13'),
(3, 'Effective', 'Funds are typically sent to your client in as little as 24 hours, with no upfront out-of-pocket costs.', 'advantage-lending.com_1589400071.svg', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 14:01:11', '2020-05-13 14:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `for_broker_page_settings`
--

CREATE TABLE `for_broker_page_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_detail` longtext COLLATE utf8mb4_unicode_ci,
  `form_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `for_broker_page_settings`
--

INSERT INTO `for_broker_page_settings` (`id`, `title`, `background_image`, `background_forecolor`, `page_title`, `page_detail`, `form_title`, `form_detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'For Attorneys', 'advantage-lending.com_1589402773.jpeg', '#133d8d', 'The Industry Leader In Consumer Legal Funding', '<p>When you’re looking for a reliable funding resource for your legal network, there’s no better partner than Oasis.</p>\r\n                        <p>With Oasis as a funding partner, you can count on financial liquidity to fund your clients. We’re the largest U.S. company focusing on pre-settlement funding. Our deep financial resources mean we can directly fund qualified plaintiffs up to $100,000.</p>\r\n                        <h1>Favorable Terms</h1>\r\n                        <p>Oasis offers favorable terms, with competitive broker commissions and flexible payment structures, plus reasonable rates to plaintiffs. And e-signatures and secure transfers mean transactions are finalized quickly.</p>\r\n                        <h1>On-staff Underwriters</h1>\r\n                        <p>You’ll find it easy to work with our internal underwriting department, who can approve requests quickly – as little as two hours – and provide complete and accurate reports on all your submissions.</p>\r\n                        <p>More than 10,000 attorneys work with Oasis each year, and we’ve funded more than 250,000 satisfied clients. Let us help your clients too.</p>', 'Work With Oasis', '<p>Looking for more information about a broker relationship with Oasis? Contact us below or toll-free at <a class=\"color_or\" href=\"tel:877.333.6680\">(877) 333-6680</a>.</p>\r\n                        <p>Note: Oasis does not work with brokers in the state of Missouri.</p>', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 14:46:13', '2020-05-13 14:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `funding_forms`
--

CREATE TABLE `funding_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funding_forms`
--

INSERT INTO `funding_forms` (`id`, `title`, `detail`, `link_text`, `link_url`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Advantage Lending Structured Settlements®Funding', 'If you have a structured settlement — smaller payments received over time after your case has settled — Advantage Lending may be able to help you get money sooner.', 'Learn More', 'structured-settlement-application-form', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 16:40:22', '2020-05-12 17:28:29'),
(2, 'Advantage Lending Inheritance®Funding', 'Also known as an estate loan, this funding expedites access to your inheritance if it’s tied up in probate. If you can’t wait, we may have solutions for you.', 'Learn More', 'inheritance-funding', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 16:41:09', '2020-05-12 17:28:52'),
(3, 'Don’t have an attorney?', 'We can connect you with legal professionals to help advise on your specific situation.', 'Learn More', 'need-an-attorney', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 17:26:32', '2020-05-12 17:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `funding_need_page_contents`
--

CREATE TABLE `funding_need_page_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funding_need_page_contents`
--

INSERT INTO `funding_need_page_contents` (`id`, `title`, `detail`, `bottom_button_text`, `bottom_button_url`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'FUNDING YOU NEED NOW.', 'We can help you access part of your settlement faster in a few simple steps.', 'Apply Now', '#appointment', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 05:00:50', '2020-05-12 05:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `funding_you_needs`
--

CREATE TABLE `funding_you_needs` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funding_you_needs`
--

INSERT INTO `funding_you_needs` (`id`, `image`, `title`, `short_detail`, `block_forecolor`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'advantage-lending.com_1589282517.jpg', 'General Constructing', 'There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.', 'rgb(245,245,245,1)', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 05:21:57', '2020-05-12 05:21:57'),
(2, 'advantage-lending.com_1589282543.jpg', 'Making Bridge', 'There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.', 'rgb(245,245,245,1)', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 05:22:23', '2020-05-12 05:22:23'),
(3, 'advantage-lending.com_1589282580.jpg', 'Design Build', 'There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.', 'rgb(245,245,245,1)', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 05:23:00', '2020-05-12 05:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `glossaries`
--

CREATE TABLE `glossaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `glossaries`
--

INSERT INTO `glossaries` (`id`, `title`, `detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Accident Lawsuit', 'A civil complaint filed by someone injured as the result of an unexpected event caused by another person’s negligence. The injured party (plaintiff) files the suit in order to obtain compensation for injuries sustained.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:51:46', '2020-05-12 10:51:46'),
(2, 'Accident Loans', 'Financial relief in the form of a loan available to some plaintiffs in civil lawsuits (usually in personal injury cases) to help them make ends meet and cover medical expenses while their cases are pending. Also known as personal injury loans and personal injury lawsuit loans.\r\n\r\nPre-settlement funding from Oasis is not provided as a loan in most states.  However, Oasis is regulated as a lender in some states. It provides you a portion of your pending personal injury settlement now to help with covering regular expenses while you wait. The money is paid back from your settlement along with any fees and charges, and if you lose your case you are under no obligation to pay Oasis back.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:52:57', '2020-05-12 10:52:57'),
(3, 'Lawsuit Cash Advance', 'Financial relief in the form of an advance (i.e. a loan) available to some plaintiffs (usually in personal injury cases). In this type of arrangements, funding companies assess the strength of a plaintiff’s case to determine its worth and chances of successful resolution. If the plaintiff has a strong case, the company will provide a cash advance against the pending settlement. The amount advanced plus any applicable fees/charges is deducted from the settlement when the case is resolved. Also known as: lawsuit settlement funding, lawsuits loans, legal funding, legal funding loans, and legal loans, or loans for lawsuits.\r\n\r\nPre-settlement funding from Oasis is not a cash advance or loan (although Oasis does operate as a loan in a few states due to regulation) but provides cash in advance of the pending settlement from your lawsuit. The cash is paid back from your settlement plus any fees or charges. Should you lose your case, you are not required to pay Oasis back, ever.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:53:23', '2020-05-12 10:53:23'),
(4, 'Legal Financial Services', 'Financial services, such as the provision of lawsuit funding and variations thereof, provided to plaintiffs involved in civil litigation in certain circumstances.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:53:41', '2020-05-12 10:53:41'),
(5, 'Pre-settlement Funding', 'One form of financial relief available to plaintiffs in civil lawsuits while their cases are pending. It is similar to a lawsuit cash advance. Also known as:  pre-lawsuit loans, pre-settlement funding loans, Pre-settlement lawsuit funding, and pre settlement loans.\r\n\r\nWhile pre-settlement funding is sometimes referred to as a loan (i.e. pre-settlement loan, pre-settlement lawsuit loan, etc.) it is actually a way for a plaintiff to receive a portion of their pending settlement now while they wait. The money is paid back from their settlement and if they should lose, a plaintiff is under no obligation to pay the money back. Please note, due to regulation Oasis does operate as a loan in some states.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:54:01', '2020-05-12 10:54:01'),
(6, 'Settlement Loans', 'Another form of financial relief available to plaintiffs in personal injury and similar cases while they are awaiting compensation upon the successful resolution of their case. The proceeds may be used to meet routine financial obligations or cover medical expenses. The amount advanced against the settlement is deducted from the settlement, along with any applicable fees/charges.\r\n\r\nFunding from Oasis is not a loan, except in some states where Oasis does operate as a loan due to regulation. It is a cash payment of a portion of a pending settlement or judgement that is paid back from the settlement along with any fees or charges. If a plaintiff loses their case, they are not required to pay Oasis back.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:54:21', '2020-05-12 10:54:21'),
(7, 'Settlement', 'In the context of civil litigation, a settlement is the resolution of the legal matter in question prior to trial or before a judgment is awarded. It is usually reached through negotiations between attorneys for the parties involved.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:54:41', '2020-05-12 10:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `glossary_section_contents`
--

CREATE TABLE `glossary_section_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `glossary_section_contents`
--

INSERT INTO `glossary_section_contents` (`id`, `title`, `detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Glossary', 'There is a lot of terminology used in referring to pre-settlement and personal injury cases. The below glossary of terms and phrases is meant to provide some clarification around what each means and how they relate to the products and services offered by Oasis Financial.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:48:52', '2020-05-12 10:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `hear_abouts`
--

CREATE TABLE `hear_abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hear_abouts`
--

INSERT INTO `hear_abouts` (`id`, `name`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Internet Search', NULL, NULL, NULL, NULL, '2020-05-10 15:25:05', '2020-05-10 15:25:05'),
(2, 'Online Advertising', NULL, NULL, NULL, NULL, '2020-05-10 15:25:18', '2020-05-10 15:25:18'),
(3, 'TV Commercial', NULL, NULL, NULL, NULL, '2020-05-10 15:25:33', '2020-05-10 15:25:33'),
(4, 'Attorney Referral', NULL, NULL, NULL, NULL, '2020-05-10 15:25:43', '2020-05-10 15:25:43'),
(5, 'Radio Commercial', NULL, NULL, NULL, NULL, '2020-05-10 15:26:00', '2020-05-10 15:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `help_on_many_cases`
--

CREATE TABLE `help_on_many_cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_block_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_block_bottom_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_block_bottom_text_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_on_many_cases`
--

INSERT INTO `help_on_many_cases` (`id`, `title`, `detail`, `button_text`, `button_url`, `case_block_forecolor`, `case_block_bottom_forecolor`, `case_block_bottom_text_color`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'HELP FOR MANY CASE TYPES', 'Oasis provides financial support when you need it most, funding a variety of personal injury case types.', 'View All Types Of Cases <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>', 'types-of-funding', '#F5F5F5', '#FF741A', '#fff', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 09:56:23', '2020-05-12 10:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `help_on_many_case_typeses`
--

CREATE TABLE `help_on_many_case_typeses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_on_many_case_typeses`
--

INSERT INTO `help_on_many_case_typeses` (`id`, `title`, `detail`, `image`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Auto Accidents', 'Motor Vehicle,\r\nPassenger Injury,\r\nPedestrian Injury,', 'advantage-lending.com_1589299419.svg', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:03:39', '2020-05-12 18:26:45'),
(2, 'Workers’ Comp', 'Construction Negligence,\r\nFELA (Railroad),\r\nJones Act (Maritime)', 'advantage-lending.com_1589299464.svg', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:04:24', '2020-05-12 18:26:54'),
(3, 'Premises Negligence', 'Civil Rights,\r\nGeneral Negligence,\r\nWrongful Death', 'advantage-lending.com_1589299492.svg', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:04:52', '2020-05-12 18:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works_do_not_settle_for_lesses`
--

CREATE TABLE `how_it_works_do_not_settle_for_lesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works_do_not_settle_for_lesses`
--

INSERT INTO `how_it_works_do_not_settle_for_lesses` (`id`, `title`, `detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Don’t Settle For Less', 'There is a lot of terminology used in referring to pre-settlement and personal injury cases. The below glossary of terms and phrases is meant to provide some clarification around what each means and how they relate to the products and services offered by Oasis Financial.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 14:52:07', '2020-05-12 14:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works_do_not_settle_steps`
--

CREATE TABLE `how_it_works_do_not_settle_steps` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works_do_not_settle_steps`
--

INSERT INTO `how_it_works_do_not_settle_steps` (`id`, `image`, `title`, `detail`, `button_text`, `button_url`, `button_status`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'advantage-lending.com_1589317828.svg', '1. You Apply', 'All you have to do is fill out the form on our website, but don’t worry, you are under no obligation by doing so. Simply begin by providing your name and contact information; the name of the law firm that’s handling your case; your lawyer’s name; and the law firm’s telephone number.', 'Apply Now', '#', 'Enable', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 15:10:28', '2020-05-12 16:38:10'),
(2, 'advantage-lending.com_1589322596.svg', '2. We Review', 'All you have to do is fill out the form on our website, but don’t worry, you are under no obligation by doing so. Simply begin by providing your name and contact information; the name of the law firm that’s handling your case; your lawyer’s name; and the law firm’s telephone number.', '#', '#', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 16:29:56', '2020-05-12 16:29:56'),
(3, 'advantage-lending.com_1589322633.svg', '3. We Pay', 'All you have to do is fill out the form on our website, but don’t worry, you are under no obligation by doing so. Simply begin by providing your name and contact information; the name of the law firm that’s handling your case; your lawyer’s name; and the law firm’s telephone number.', 'Apply Now', '#', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 16:30:33', '2020-05-12 16:40:47'),
(4, 'advantage-lending.com_1589322690.svg', '4. You Benefit', 'All you have to do is fill out the form on our website, but don’t worry, you are under no obligation by doing so. Simply begin by providing your name and contact information; the name of the law firm that’s handling your case; your lawyer’s name; and the law firm’s telephone number.', 'Apply Now', '#', 'Disable', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 16:31:30', '2020-05-12 16:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works_page_settings`
--

CREATE TABLE `how_it_works_page_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works_page_settings`
--

INSERT INTO `how_it_works_page_settings` (`id`, `title`, `background_image`, `background_forecolor`, `form_title`, `form_detail`, `form_button_text`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'How it Works', 'advantage-lending.com_1589312075.jpeg', '#133d8d', 'Need Help? Ready To Get Started?', 'Contact our team toll-free at (877) 333-6680, or start our free, no obligation application.', 'Continue', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 13:34:35', '2020-05-12 17:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_work_cases_we_funds`
--

CREATE TABLE `how_it_work_cases_we_funds` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_two_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_options` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_work_cases_we_funds`
--

INSERT INTO `how_it_work_cases_we_funds` (`id`, `title`, `detail`, `button_text`, `section_image`, `heading_two_title`, `heading_options`, `link_text`, `link_url`, `section_background_forecolor`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Cases We Fund', 'Advantage Lending offers financial assistance for a wide variety of personal injury case types, including auto accidents, workers’ comp, slip and fall, and many more.', 'Learn more', 'advantage-lending.com_1589320068.jpg', 'Pre-Settlement Funding Is A Good Option For You If:', 'You have been injured,You have an attorney,You are struggling to make ends meet while waiting for your settlement', 'Don’t have an attorney? We can help', '#appointment', '#F5F5F5', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 15:47:48', '2020-05-12 15:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_work_securing_the_moneies`
--

CREATE TABLE `how_it_work_securing_the_moneies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `content_image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_work_securing_the_moneies`
--

INSERT INTO `how_it_work_securing_the_moneies` (`id`, `title`, `detail`, `content_image_one`, `content_image_two`, `background_forecolor`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Don’t Hesitate – Take The First Step To Securing The Money You Need', 'You have a lot of options when it comes to pre-settlement funding, but our competitors can’t match our simple, affordable, risk-free process. As experts in the field, we have earned an  A+ rating from the Better Business Bureau, and our four-star rating from Trustpilot. We have also helped thousands of people by providing financial relief when they need it the most. \r\n\r\nAt a time when you should be fully focused on your recovery, the last thing you need is to stress over financial troubles.', 'advantage-lending.com_1589320602.png', 'advantage-lending.com_1589320658.png', '#eef9ff', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 15:56:42', '2020-05-12 15:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `how_we_helps`
--

CREATE TABLE `how_we_helps` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_detail` mediumtext COLLATE utf8mb4_unicode_ci,
  `section_one_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_one_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_two_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_two_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_three_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_three_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_four_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_four_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_we_helps`
--

INSERT INTO `how_we_helps` (`id`, `section_title`, `section_detail`, `section_one_icon`, `section_one_content`, `section_two_icon`, `section_two_content`, `section_three_icon`, `section_three_content`, `section_four_icon`, `section_four_content`, `section_image`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'HOW WE HELP', 'Pre-settlement financing puts money in your pocket before your case is settled. And because the money is repaid from your settlement, you can get it now, with no risk, no out-of-pocket costs, and your credit score is not a factor.', '<i class=\"fa fa-money\"></i>', 'Get a $500 – $100,000 advance on your settlement', '<i class=\"fa fa-clock-o\"></i>', 'Get cash in as little as 24 hours once approved', '<i class=\"fa fa-shield\"></i>', 'No risk — If you lose your case, you owe us nothing; pay us back only from your settlement', '<i class=\"fa fa-briefcase\"></i>', 'BBB A+ Rating, trusted by more than 250,000 people like you', 'advantage-lending.com_1589272183.png', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 02:29:43', '2020-05-12 02:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `inheritance_funding_forms`
--

CREATE TABLE `inheritance_funding_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT '0',
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_received_inheritance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_inheritance_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount_inheritance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_you_need_now` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `would_you_like_to_refer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meet_leader_settings`
--

CREATE TABLE `meet_leader_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meet_leader_settings`
--

INSERT INTO `meet_leader_settings` (`id`, `title`, `background_image`, `background_forecolor`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Meet Our Leaders', 'advantage-lending.com_1589330813.jpg', '#133d8d', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 18:46:53', '2020-05-12 18:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_10_081830_create_usa_states_table', 2),
(4, '2020_05_10_091834_create_case_types_table', 3),
(5, '2020_05_10_092420_create_hear_abouts_table', 4),
(6, '2020_05_10_095752_create_application_forms_table', 5),
(7, '2020_05_10_103622_create_structured_settlement_application_forms_table', 6),
(8, '2020_05_10_111200_create_inheritance_funding_forms_table', 7),
(9, '2020_05_10_112258_create_need_an_attorneies_table', 8),
(10, '2020_05_11_072223_create_contact_me_abouts_table', 9),
(12, '2020_05_11_081711_create_contact_requests_table', 10),
(13, '2020_05_11_082249_create_faq_categories_table', 11),
(14, '2020_05_11_082350_create_resource_content_infos_table', 12),
(15, '2020_05_11_082703_create_resource_contents_table', 13),
(16, '2020_05_11_082902_create_faq_contents_table', 14),
(18, '2020_05_11_085845_create_site_settings_table', 15),
(19, '2020_05_11_102949_create_sliders_table', 16),
(20, '2020_05_12_082154_create_how_we_helps_table', 17),
(21, '2020_05_12_095510_create_better_days_starts_table', 18),
(22, '2020_05_12_105900_create_funding_need_page_contents_table', 19),
(23, '2020_05_12_111704_create_funding_you_needs_table', 20),
(24, '2020_05_12_120101_create_you_are_not_alones_table', 21),
(25, '2020_05_12_121701_create_you_are_not_alone_videos_table', 22),
(29, '2020_05_12_035427_create_help_on_many_cases_table', 23),
(30, '2020_05_12_040157_create_help_on_many_case_typeses_table', 24),
(31, '2020_05_12_043828_create_never_settle_for_lesses_table', 25),
(32, '2020_05_12_044757_create_glossary_section_contents_table', 26),
(33, '2020_05_12_045050_create_glossaries_table', 27),
(39, '2020_05_12_072000_create_privacy_policy_pages_table', 28),
(40, '2020_05_12_072657_create_terms_of_uses_table', 29),
(41, '2020_05_12_072956_create_state_specific_licenseses_table', 30),
(42, '2020_05_12_073215_create_how_it_works_page_settings_table', 31),
(43, '2020_05_12_073603_create_faq_page_settings_table', 32),
(44, '2020_05_12_074408_create_types_of_funding_page_settings_table', 33),
(45, '2020_05_12_082212_create_resource_page_settings_table', 34),
(47, '2020_05_12_084137_create_type_of_fund_pages_table', 36),
(48, '2020_05_12_084819_create_how_it_works_do_not_settle_for_lesses_table', 37),
(50, '2020_05_12_090612_create_how_it_works_do_not_settle_steps_table', 38),
(51, '2020_05_12_091646_create_how_it_work_cases_we_funds_table', 39),
(52, '2020_05_12_095334_create_how_it_work_securing_the_moneies_table', 40),
(54, '2020_05_12_102333_create_types_of_funding_pre_settlements_table', 41),
(55, '2020_05_12_103806_create_funding_forms_table', 42),
(56, '2020_05_12_111307_create_types_of_fund_cases_we_fund_types_table', 43),
(57, '2020_05_12_115828_create_about_page_settings_table', 44),
(58, '2020_05_13_121847_create_about_milestoneses_table', 45),
(59, '2020_05_13_123524_create_meet_leader_settings_table', 46),
(60, '2020_05_13_012050_create_team_members_table', 47),
(61, '2020_05_13_111127_create_about_meet_our_teams_table', 48),
(62, '2020_05_13_112907_create_about_meet_our_team_members_table', 49),
(64, '2020_05_13_114550_create_about_work_at_oasises_table', 50),
(65, '2020_05_13_033250_create_about_work_at_advantage_lendings_table', 51),
(66, '2020_05_13_063036_create_about_media_settings_table', 52),
(67, '2020_05_13_064332_create_about_medias_table', 53),
(68, '2020_05_13_071737_create_for_attorney_page_settings_table', 54),
(69, '2020_05_13_073515_create_for_atterney_portal_simplifies_table', 55),
(70, '2020_05_13_074447_create_for_attorney_known_and_recognizeds_table', 56),
(71, '2020_05_13_075603_create_for_attorney_settlement_funding_processes_table', 57),
(72, '2020_05_13_080947_create_for_attorney_product_and_services_table', 58),
(73, '2020_05_13_084359_create_for_broker_page_settings_table', 59),
(74, '2020_05_13_085209_create_contact_uses_table', 60),
(75, '2020_05_14_010533_create_career_page_settings_table', 61),
(76, '2020_05_14_014246_create_career_posts_table', 62),
(77, '2020_05_14_065303_create_attorneys_forms_table', 63);

-- --------------------------------------------------------

--
-- Table structure for table `need_an_attorneies`
--

CREATE TABLE `need_an_attorneies` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_type` int(11) DEFAULT '0',
  `case_type_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_case` int(11) DEFAULT '0',
  `state_case_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `never_settle_for_lesses`
--

CREATE TABLE `never_settle_for_lesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `never_settle_for_lesses`
--

INSERT INTO `never_settle_for_lesses` (`id`, `title`, `detail`, `image`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Never Settle For Less', 'Oasis understands that bills don’t wait — and cases don’t settle quickly. We’ll work to get you a cash advance now, allowing your attorney more time to fight for the full value of your case.', 'advantage-lending.com_1589301540.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 10:39:00', '2020-05-12 10:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_names`
--

CREATE TABLE `page_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `db_table` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_names`
--

INSERT INTO `page_names` (`id`, `name`, `db_table`, `route_link`, `page_type`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(33, 'USAState', 'usa_states', 'usastate', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'CaseType', 'case_types', 'casetype', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'HearAbout', 'hear_abouts', 'hearabout', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'ApplicationForm', 'application_forms', 'applicationform', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'StructuredSettlementApplicationForm', 'structured_settlement_application_forms', 'structuredsettlementapplicationform', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'InheritanceFundingForm', 'inheritance_funding_forms', 'inheritancefundingform', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'NeedAnAttorney', 'need_an_attorneies', 'needanattorney', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'ContactMeAbout', 'contact_me_abouts', 'contactmeabout', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'ContactRequest', 'contact_requests', 'contactrequest', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'FAQCategory', 'faq_categories', 'faqcategory', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'ResourceContentInfo', 'resource_content_infos', 'resourcecontentinfo', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'ResourceContent', 'resource_contents', 'resourcecontent', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'FAQContent', 'faq_contents', 'faqcontent', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'SiteSetting', 'site_settings', 'sitesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Slider', 'sliders', 'slider', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'HowWeHelp', 'how_we_helps', 'howwehelp', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'BetterDaysStart', 'better_days_starts', 'betterdaysstart', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'FundingNeedPageContent', 'funding_need_page_contents', 'fundingneedpagecontent', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'FundingYouNeed', 'funding_you_needs', 'fundingyouneed', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'YOUARENOTALONE', 'you_are_not_alones', 'youarenotalone', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'YouAreNotAloneVideo', 'you_are_not_alone_videos', 'youarenotalonevideo', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'HelpOnManyCase', 'help_on_many_cases', 'helponmanycase', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'HelpOnManyCaseTypes', 'help_on_many_case_typeses', 'helponmanycasetypes', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'NeverSettleForLess', 'never_settle_for_lesses', 'neversettleforless', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'GlossarySectionContent', 'glossary_section_contents', 'glossarysectioncontent', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Glossary', 'glossaries', 'glossary', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'PrivacyPolicyPage', 'privacy_policy_pages', 'privacypolicypage', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'TermsOfUse', 'terms_of_uses', 'termsofuse', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'StateSpecificLicenses', 'state_specific_licenseses', 'statespecificlicenses', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'HowitWorksPageSetting', 'how_it_works_page_settings', 'howitworkspagesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'FaqPageSetting', 'faq_page_settings', 'faqpagesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'TypesOfFundingPageSetting', 'types_of_funding_page_settings', 'typesoffundingpagesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'ResourcePageSetting', 'resource_page_settings', 'resourcepagesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'TypeofFundPage', 'type_of_fund_pages', 'typeoffundpage', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'HowItWorksDoNotSettleForLess', 'how_it_works_do_not_settle_for_lesses', 'howitworksdonotsettleforless', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'HowItWorksDoNotSettleStep', 'how_it_works_do_not_settle_steps', 'howitworksdonotsettlestep', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'HowItWorkCasesWeFund', 'how_it_work_cases_we_funds', 'howitworkcaseswefund', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'HowItWorkSecuringTheMoney', 'how_it_work_securing_the_moneies', 'howitworksecuringthemoney', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'TypesOfFundingPreSettlement', 'types_of_funding_pre_settlements', 'typesoffundingpresettlement', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'FundingForm', 'funding_forms', 'fundingform', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'TypesOfFundCasesWeFundType', 'types_of_fund_cases_we_fund_types', 'typesoffundcaseswefundtype', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'AboutPageSetting', 'about_page_settings', 'aboutpagesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'AboutMilestones', 'about_milestoneses', 'aboutmilestones', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'MeetLeaderSetting', 'meet_leader_settings', 'meetleadersetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'TeamMember', 'team_members', 'teammember', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'AboutMeetOurTeam', 'about_meet_our_teams', 'aboutmeetourteam', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'AboutMeetOurTeamMember', 'about_meet_our_team_members', 'aboutmeetourteammember', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'AboutWorkAtOasis', 'about_work_at_oasises', 'aboutworkatoasis', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'AboutWorkAtAdvantageLending', 'about_work_at_advantage_lendings', 'aboutworkatadvantagelending', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'AboutMediaSetting', 'about_media_settings', 'aboutmediasetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'AboutMedia', 'about_medias', 'aboutmedia', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'ForAttorneyPageSetting', 'for_attorney_page_settings', 'forattorneypagesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'ForAtterneyPortalsimplify', 'for_atterney_portal_simplifies', 'foratterneyportalsimplify', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'ForAttorneyKnownandRecognized', 'for_attorney_known_and_recognizeds', 'forattorneyknownandrecognized', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'ForAttorneySettlementFundingProcess', 'for_attorney_settlement_funding_processes', 'forattorneysettlementfundingprocess', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'ForAttorneyProductAndService', 'for_attorney_product_and_services', 'forattorneyproductandservice', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'ForBrokerPageSetting', 'for_broker_page_settings', 'forbrokerpagesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'ContactUs', 'contact_uses', 'contactus', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'CareerPageSetting', 'career_page_settings', 'careerpagesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'CareerPost', 'career_posts', 'careerpost', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'Attorneysform', 'attorneys_forms', 'attorneysform', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy_pages`
--

CREATE TABLE `privacy_policy_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_content` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policy_pages`
--

INSERT INTO `privacy_policy_pages` (`id`, `title`, `background_image`, `background_forecolor`, `page_content`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', 'advantage-lending.com_1589311650.jpeg', '#133d8d', '<p class=\"p2\"><span class=\"s1\"><b> Last Updated</b>: [<i>January 1, 2020</i>]</span></p>\r\n                        <p class=\"p2\"><span class=\"s1\"><b>I. INTRODUCTION. </b>This Privacy Policy (this “Privacy Policy”) describes how Oasis Financial; Oasis Legal Finance, LLC; Oasis Structured Settlements; OFLC, LLC; other company names used by us and our affiliates (together referred to as “Oasis”, “we”, “us”, or “our”) handles and secures information we collect through our websites at </span><a href=\"https://www.oasisfinancial.com\"><span class=\"s2\">www.oasisfinancial.com</span></a><span class=\"s1\"> and <a href=\"https://myoasis.com/\">myoasis.com</a>, (“Site”) relating to our products and services (“Services”). For the purpose of this Privacy Policy, “you” or “User” means the individual user of our Services and / or a visitor to our Site. In addition, please review the terms of the user agreement governing any Services you receive from us, which governs your use thereof. By using our Services, you consent to our Privacy Policy and our </span><span class=\"s2\">Terms of Use</span><span class=\"s1\"> and our collection, use and sharing of your information and data, and other activities, as described below. If you have entered into a user agreement for our Services (your “User Agreement”), it will supplement and amend the Terms of Use. Because the Terms of Use and your User Agreement include subjects that may not be covered in this Privacy Policy, and may narrow or modify the scope of our use of information under this Privacy Policy, please review them each carefully. If you do not agree to the terms of this Privacy Policy, please do not provide us with any personal information and do not use our Site or Services.</span></p>\r\n                        <p><b>II. INFORMATION COLLECTED BY OUR SITE AND/OR SERVICES. </b></p>\r\n                        <p><b>Data Submitted by User or Visitor of Site and/or Services</b></p>\r\n                        <p class=\"p4\"><span class=\"s1\">When you use our Site or Services, you can (depending on the Services you use) submit information by way of the following: </span></p>\r\n                        <ol class=\"ol1\">\r\n                        <li class=\"li4\"><span class=\"s1\">Typing-in data (such as when you fill out an application, register for our Services, type a message to send to us or another user, enter a search request, or complete a form); </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Uploading a document, image or other data file; or </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Authorizing us to retrieve and import information from you, another user or other third party on your behalf. </span></li>\r\n                        </ol>\r\n                        <p class=\"p4\"><span class=\"s1\"><b>Engagement Tools and Engagement Data </b></span></p>\r\n                        <p>Our Site also gathers information whenever you visit, log in or otherwise interact with us. As with other websites and interactive services, whenever you interact with our Site, your computer, mobile phone or tablet and its software (a “Device”) transmits a “request” to us. That request includes information received from your Device necessary for us to identify and appropriately route the information your Device is requesting. These “requests” and “replies” are present on all websites and Internet services. Therefore, whenever you:</p>\r\n                        <ol class=\"ol1\">\r\n                        <li class=\"li4\"><span class=\"s1\">Visit and navigate through our Site or Services; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Click on a link; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Open a webpage or web form; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Open a web-enabled email sent by us; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Send a message via our interactive chat or instant message feature; or </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Otherwise take an action or interact with elements of our Site or its pages, content or features your Device is sending non-personal information to us. </span></li>\r\n                        </ol>\r\n                        <p class=\"p4\"><span class=\"s1\">Our Site also gathers information whenever you visit, log in or otherwise interact with us. In addition to managing the appropriate routing of information, we use so-called “cookies,” “web beacons,” “server logs” and other Engagement Tools (“Engagement Tools”) to enhance the quality of the service and content you receive. For example, we use Engagement Tools to: </span></p>\r\n                        <ol class=\"ol1\">\r\n                        <li class=\"li4\"><span class=\"s1\">Save User preferences; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Preserve session settings and activity; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Help authenticate Users; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Allow Users to auto-fill sign-in pages of websites they frequently visit; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Tailor the delivery of ads and other content; and </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Analyze the performance of our Site, Services and various features and content. </span></li>\r\n                        </ol>\r\n                        <p class=\"p2\"><span class=\"s1\">Therefore, even if you do not register with us or submit any personal information on our Site, our Engagement Tools automatically receive information about your Device and the software running on it. We call such information Engagement Data (“Engagement Data”).</span></p>\r\n                        <p>Engagement Data often includes elements such as the date and time a “request” is made, the model of the Device making the “request,” the type and version of operating system running on a Device, the browser making the request, routing information, IP address, geolocation, search terms a User enters, what URL a Device most recently visited, and, if a mobile application is used, an anonymous unique number. Engagement Data can also include Internet or other electronic network activity information, including, but not limited to, browsing history, search history, and information regarding a consumer’s interaction with an Internet website, application, or advertisement. Engagement Data can be combined with personal information. If so, we treat such combined information the same way we treat personal information.</p>\r\n                        <p>You have the ability to control how certain Engagement Tools operate by modifying the settings on your Device or its software. Most browsers, for example, allow you to refuse accepting cookies, and many mobile Devices allow you to disable the sending of location information. In some cases, doing these things could diminish the performance of our Site and Services or render them inoperable. To learn more about Engagement Tools and how we use Engagement Data please see the section below entitled “How Information is Used.”</p>\r\n                        <p><b>Do Not Track Disclosures </b></p>\r\n                        <p>Various third parties are developing or have developed signals or other mechanisms for the expression of consumer choice regarding the collection of information about an individual consumer’s online activities over time and across third-party websites or online services (e.g., browser “do not track” signals). Currently, we do not monitor or take any action with respect to these signals or other mechanisms.</p>\r\n                        <p><b>Online Tracking By Third Parties </b></p>\r\n                        <p>Third-party analytics and other service providers, such as Google Analytics, may set and access their own tracking technologies on your Device and they may otherwise collect or have access to information about you and track you over time and across third party websites. These service providers use tracking technologies to help us analyze how visitors use our Site and Services. We are not responsible for those third party technologies or activities arising out of them. However, some third parties may offer you certain choices regarding their practices.</p>\r\n                        <p class=\"p2\"><span class=\"s1\">For example, to learn about opting out of Google Analytics, please visit </span><a href=\"https://tools.google.com/dlpage/gaoptout\"><span class=\"s2\">https://tools.google.com/dlpage/gaoptout</span></a><span class=\"s1\">. We are not responsible for the effectiveness of or compliance with any third parties’ opt-out options. If you choose to opt out of the use of Google Analytics, Google will no longer collect and analyze information via cookies associated with your browser for these services. When you opt out, Google will place opt-out cookies on your browser. If you delete your cookies, change browsers, or change devices, you will need to repeat this opt-out process. Also, please note that this opt-out process will work only if your browser is set to accept all cookies. We may still use Google Analytics services to create promotions and apps within social networks after you opt out. These services do not rely on collecting and analyzing information via cookies. To learn more about your choices for these services, review the options your social network provides. </span></p>\r\n                        <p class=\"p2\"><span class=\"s1\">You can obtain information about which third parties have currently enabled cookies and how to opt-out of some of those cookies by visiting the Network Advertising Initiative’s website at </span><span class=\"s2\">http://optout.networkadvertising.org</span><span class=\"s1\">; or the Digital Advertising Alliance’s website at </span><a href=\"//optout.aboutads.info\"><span class=\"s2\">http://optout.aboutads.info</span></a><span class=\"s1\">. For more information on mobile-specific opt-out choices, please visit </span><a href=\"https://www.networkadvertising.org/mobile-choices\"><span class=\"s2\">https://www.networkadvertising.org/mobile-choices</span></a><span class=\"s1\">.</span></p>\r\n                        <p><b>Third Party Tools </b></p>\r\n                        <p>We work with certain third parties who deploy their own Engagement Tools on our Site (“Third Party Tools”). In some instances they do so exclusively on our behalf. In other instances, they may retain and use the data they collect pursuant to publicly available privacy policies. These Third Party Tools are frequently deployed by companies providing online advertising services or analytics, but they may be deployed in other contexts as well, such as social media plug-ins. We treat personal and non-personal information that we receive from these Third Party Tools the same way we treat personal and non-personal information that we directly collect from our Site. We, however, do not control how these third parties manage the information they gather.</p>\r\n                        <p><b>III. PERSONAL AND NON-PERSONAL INFORMATION. </b></p>\r\n                        <p>Information you submit to us that identifies you or can be used to contact you (e.g., email or mailing address) is your “personal information.” We collect the following categories of personal information about you:</p>\r\n                        <ul class=\"ul1\">\r\n                        <li class=\"li2\"><span class=\"s1\">Personal identifiers, including name, telephone number, address, email, Social Security number, driver’s license number, and date of birth.</span></li>\r\n                        <li class=\"li2\"><span class=\"s1\">Financial information, including credit card number, bank account number, and ACH account number </span></li>\r\n                        <li class=\"li2\"><span class=\"s1\">Case information, which may include family members. </span></li>\r\n                        <li class=\"li2\"><span class=\"s1\">Histories or tendencies, including medical information, criminal history, credit history, military service, judgments, or funding history. </span></li>\r\n                        <li class=\"li2\"><span class=\"s1\">Commercial information, including records of personal property or products or services purchased, obtained, or considered.</span></li>\r\n                        <li class=\"li2\"><span class=\"s1\">Other information that identifies, relates to, describes, is capable of being associated with, or could reasonably be linked, directly or indirectly, with you, including signatures, call recordings, employment information, or education information.</span></li>\r\n                        </ul>\r\n                        <p class=\"p4\"><span class=\"s1\">When we combine non-personal information with personal information, or non-personal information with other non-personal information in a way that renders the combined information personal information, we treat that combined information the same way we treat personal information. When we combine personal information with information from third party sources, we also treat that combined information the same way we treat personal information.</span></p>\r\n                        <p><strong><span class=\"s4\">How Information is Used</span></strong></p>\r\n                        <p>We use personal and non-personal information (including Engagement Data) for the following purposes:</p>\r\n                        <ol class=\"ol1\">\r\n                        <li class=\"li4\"><span class=\"s1\">Operating, maintaining, managing and administering our Site or Services, including processing registrations and payments, and providing customer support; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Responding to questions and communications, which we retain in the ordinary course of business; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Administrative announcements about features, functionality, terms or other aspects of our Site or Services; and, if applicable, informing about offers for services or products we believe may be of interest to you (see also “Service Emails and other Communications” sections below); </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Safeguarding and protecting our Site and Services, the information they safeguard, the rights of third parties and in response to legal process, in each case, as more fully described below in “The Importance of Protecting our Site, Services and the Information they Safeguard”;&nbsp;</span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Auditing related to a current interaction with the consumer and concurrent transactions, including, but not limited to, counting ad impressions to unique visitors, verifying positioning and quality of ad impressions, and auditing compliance with this specification and other standards; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\"> Detecting security incidents, protecting against malicious, deceptive, fraudulent, or illegal activity, and prosecuting those responsible for that activity; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\"> Debugging to identify and repair errors that impair existing intended functionality; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\"> Short-term, transient use, provided the personal information that is not disclosed to another third party and is not used to build a profile about a consumer or otherwise alter an individual consumer’s experience outside the current interaction, including, but not limited to, the contextual customization of ads shown as part of the same interaction; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\"> Performing services on behalf of the business or service provider, including maintaining or servicing accounts, providing customer service, processing or fulfilling orders and transactions, verifying customer information, processing payments, providing financing, providing advertising or marketing services, providing analytic services, or providing similar services on behalf of the business or service provider; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\"> Undertaking internal research for technological development and demonstration; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\"> Undertaking activities to verify or maintain the quality or safety of a service or device that is owned, manufactured, manufactured for, or controlled by the business, and to improve, upgrade, or enhance the service or device that is owned, manufactured, manufactured for, or controlled by the business; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Advancing a person’s commercial or economic interests, such as by inducing another person to buy, rent, lease, join, subscribe to, provide, or exchange products, goods, property, information, or services, or enabling or effecting, directly or indirectly, a commercial transaction; and </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Other legitimate business purposes permitted by law, including any other purpose described in this Privacy Policy or your User Agreement. </span></li>\r\n                        </ol>\r\n                        <p class=\"p4\"><span class=\"s1\">We use non-personal information for the following purposes: </span></p>\r\n                        <ol class=\"ol1\">\r\n                        <li class=\"li4\"><span class=\"s1\">Auditing, research, measurement and analysis in order to maintain, administer, enhance and protect our Site and Services, including analyzing usage trends and patterns and measuring the effectiveness of content, advertising, features or services; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Creating new features and services; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Contextual and cookie-based automated content delivery, such as tailored ads or search results; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Conducting research and engaging in public service activities and services; and </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Other legitimate business purposes permitted by law, including any other purpose described in this Privacy Policy or your User Agreement. </span></li>\r\n                        </ol>\r\n                        <p class=\"p4\"><span class=\"s1\">We may also use non-personal information to prepare aggregate reports for current or future advertisers, sponsors or other partners to show trends about the general use of our Site and/or Services. Such reports may include age, gender, geographic, demographic or other general User information, but do not include personal information.</span></p>\r\n                        <p><b>IV. CONSENTS AND AUTHORIZATIONS. </b></p>\r\n                        <p>From time to time, we may request your consent or authorization (your “consent”) in connection with the use or sharing of your information. In some instances, this will be because your User Agreement, this Privacy Policy or applicable law or regulations requires us to obtain such consent. In other instances, such consent will be for informational purposes. In the latter case, the request to obtain your consent should not be interpreted as narrowing the scope or applicability of your User Agreement or this Privacy Policy – by entering into your User Agreement or using the applicable Services, you have accepted and agreed to our information handling practices in the manner described in your User Agreement and this Privacy Policy.</p>\r\n                        <p>In cases where you consent or “opt-in” to the use or sharing of your personal information in a manner that is not otherwise provided for in your User Agreement or this Privacy Policy, unless otherwise explicitly stated in such consent, you will have the ability to rescind your consent and “opt-out” of our use or sharing of such information in the future. In that event, we will refrain from our use or sharing of such information, but we may not be able to require the removal of such information from the databases of the recipients with whom such information has been shared.</p>\r\n                        <p><b>V. SERVICE EMAILS AND OTHER COMMUNICATIONS. </b></p>\r\n                        <p>Our Site and/or Services allow Users to communicate with others through our in-product instant messaging services, Service-branded emails, SMS and other electronic communication channels. Communications that are sent by or on behalf of a User are indicated as being “From” that User. Communications that are sent by us are indicated as being from us or one of our account or support specialists assigned to assist you. Either type of communications may be “real time” communications or communications triggered automatically upon the occurrence of certain events or dates – such as a repeated sign-in failure, an appointment reminder and the like.</p>\r\n                        <p><b>Email communications </b></p>\r\n                        <p>Electronic messages received from Users and our administrative announcements are often transactional or relationship messages, such as appointment requests, reminders and cancellations and other Service notifications. You may not be able to opt out of receiving certain messages, although our Site and/or Services may provide a means to modify the frequency of receiving them. In cases in which we believe User emails are not primarily transactional or relationship messages, it will include the capability to opt-out of receiving further e-mails. If you sign-up to receive marketing announcements from us, such emails will include capability to opt-out of receiving such e-mails in the future.</p>\r\n                        <p>On occasion, we will communicate marketing information, operational updates and other information to Users via electronic mail. Users agree that such transmissions are important means of communication between us and Users and shall not be considered junk faxes or unsolicited advertisements as defined by the Telephone Consumer Protection Act of 1991 or other applicable state or federal laws or regulation.</p>\r\n                        <p><b>Surveys </b></p>\r\n                        <p>From time to time we ask Users to complete surveys or otherwise provide input to improve our operations or to assist other Users in making informed choices. The content of such surveys, therefore, should be presumed public. When we make such survey, we let Users know how their responses will be used. As with communities and public forums, we strongly advise Users to exercise care in selecting what information they share in a survey or similar communication, and strongly recommend against sharing any personal financial or other sensitive information that could directly or indirectly be traced to any individual, including yourself.</p>\r\n                        <p><b>Engagement Tools </b></p>\r\n                        <p>Our Site may deploy Engagement Tools (such as “cookies,” “web beacons” and “server logs”) on outbound emails to Users and others to collect Engagement Data, and we may use vendors to assist us in sending outbound emails to Users who may deploy Third Party Tools.</p>\r\n                        <p><b>Emails and Other Communications </b></p>\r\n                        <p>Emails and other communications from individuals who are not users of our<br> Site or Services, or that are being sent in connection with business, agreements or subject matter other than your User Agreement or your use of our Services, are not covered by this Privacy Policy. If, for example, you respond to a posted job opening, that communication to us is not covered by this Privacy Policy as we utilize a third party service provider to manage the application process for the job openings that may have been posted on our Site. Likewise, if you submit to us any ideas, suggestions or proposals (collectively, “Suggestions”) relating to our Site or Services or other products or services by any means – such as through email or other communication channels, one of our communities or user forums, or to our customer support or other personnel – such Suggestions are not governed by this Privacy Policy.</p>\r\n                        <p><b>VI. SHARING OF INFORMATION. </b></p>\r\n                        <p>We will not share personal information you submit except under the following circumstances:</p>\r\n                        <ol class=\"ol1\">\r\n                        <li class=\"li4\"><span class=\"s1\">When you choose to share such information through our Site or Services. Under certain circumstances this may require a specialized consent before our Site or Services complete certain such transmissions; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">When you are otherwise notified at the time we collect such information or we otherwise have your express consent; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">When your account has been issued by an account administrator with administrative rights over your account, your account administrator will have access to your account information, including your personal information. Your account administrator may: (i) receive and retain your account information, (ii) change your account password, (iii) restrict your ability to submit, delete or edit information; (iv) suspend or terminate your account access, or (v) access or retain information you submit or otherwise stored as part of your account for any purposes required or permitted under applicable law; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">When we share such information with our current and future affiliates; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">When we use third party service providers. We may use third-party service providers to perform certain services on behalf of us, Site or the Services, such as: (a) to assist us in operations; (b) to manage a database of customer information; (c) hosting the Site or Service; (d) designing and/or operating the Site or Services’ features; (e) tracking the Site and Service’s activities and analytics; (f) enabling us to send you special offers or perform other administrative services; and (g) other services designed to assist us in maximizing our business potential. We may provide service providers with access to your Information to carry out the services they are performing for you or for us; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">When we protect our Site and Services, the information they safeguard, the rights of third parties and in response to legal process, as more fully described below in “The Importance of Protecting our Site, Services and the Information they Safeguard”; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">In connection with a sale, merger, transfer, exchange, reorganization or other disposition (whether of assets, stock, or otherwise) of all or a portion of the business conducted by the services to which this Privacy Policy applies. If such a transaction occurs, the acquiring company’s use of your personal information will remain subject to this Privacy Policy; </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">It is important for you to understand that other users who submit to, or receive from, our Site or Services personal information about you, may share that information with other persons, even without separately notifying you or seeking your consent; and<br> </span></li>\r\n                        <li>When we are complying with your requests, directions, instructions, or other express authorization; and</li>\r\n                        <li class=\"li4\"><span class=\"s1\">For our legitimate business purposes as permitted by law, including sharing for any other purpose described in this Privacy Policy or your User Agreement.&nbsp;</span></li>\r\n                        </ol>\r\n                        <p class=\"p2\"><span class=\"s1\">To limit sharing of personal information where possible, you may submit such requests by contacting us at </span><a href=\"http://www.oasisfinancial.com/privacy-rights/\"><span class=\"s5\">www.oasisfinancial.com/privacy-rights</span></a><span class=\"s1\"> or call the toll-free number <a href=\"tel:8668717741\">(866) 871-7741</a>.<span class=\"Apple-converted-space\">&nbsp; </span>We do not sell personally identifiable information, and we will not sell personally identifiable information except as described in this Policy or with your consent. If we ever decide to sell personally identifiable information, we will provide you with notice and a right to opt-out of such sale.</span></p>\r\n                        <p class=\"p4\"><span class=\"s1\"><b>VII. THE IMPORTANCE OF PROTECTING OUR SITE, SERVICES AND THE INFORMATION THEY SAFEGUARD. </b></span></p>\r\n                        <p>Our Site and many of our Services are protected by technical measures intended to safeguard the confidentiality, integrity and accessibility of sensitive information our Users store and share on our Site. Further, certain regulations require us to investigate potential or suspected threats on our Services or the confidentiality, integrity or availability of the information they safeguard. Accordingly, we may preserve, use and disclose information – including personal and non-personal information – when we have a good faith belief it is necessary or advisable to:</p>\r\n                        <ol class=\"ol1\">\r\n                        <li class=\"li4\"><span class=\"s1\">Detect, prevent and address potential or suspected: threats on our Site or Services or the confidentiality, integrity or availability of any information they house; fraud and other illegal activity; or violations of our User Agreements or Terms of Use; and </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">To protect ourselves, you and third parties. </span></li>\r\n                        </ol>\r\n                        <p class=\"p4\"><span class=\"s1\">We may also preserve, use and disclose such information in response to a search warrant, court order, subpoena, judicial proceeding or other legal process if we have a good faith belief that the law requires us to do so. Such legal process may prohibit us from notifying the Users or other individuals or entities identified by such information or take such other actions as would otherwise be a violation of your User Agreement or this Privacy Policy. When we preserve information pursuant to this section, it may be for extended periods of time, as we in good faith believe are necessary or appropriate under the circumstances, and may include the preservation of information from accounts that have been disabled.</span></p>\r\n                        <p><b>VIII. SECURITY. </b></p>\r\n                        <p>We endeavor to make security of our Site and Services and the information they collect, store, process and transmit a top priority. To prevent unauthorized access, maintain data accuracy, and ensure the appropriate use of the information we collect, we deploy a wide range of technical, physical and administrative safeguards, including: Secure Socket Layer (SSL) encryption, firewalls, system alerts and other information system security technologies; housing data in secure facilities that restrict physical and network access; and regular evaluation and enhancement of our information technology systems, facilities, and information collection, storage and processing practices. It is important to remember, however, that no system can guarantee 100% security at all times. Accordingly, we cannot guarantee the security of information stored on or transmitted to or from our Site and Services.</p>\r\n                        <p><strong><span class=\"s4\">Steps You Can Take</span></strong></p>\r\n                        <p>If we learn of a security vulnerability or risk, we may attempt to notify you and provide information on protective measures you may take. There are, however, some precautions that you can proactively take to improve your system security and reduce the likelihood of unintended disclosure of personal information:</p>\r\n                        <ol class=\"ol1\">\r\n                        <li class=\"li4\"><span class=\"s1\">Install malware detection programs that regularly scan your system and incoming traffic for malicious code – such as computer viruses, worms, Trojan Horses and spyware. Because viruses and malware are continuously created and modified, regular malware protection software typically requires frequent updates. </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Use a firewall to prevent unauthorized access to your Device. </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Because malware often targets vulnerabilities in existing operating systems, browsers, plug-ins and other programs, software vendors frequently update their products with security patches to guard against known or commonly exploited vulnerabilities. Vendors often try to alert their users and recommend immediate installation of these security patches. </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Use a strong password using a combination of letters and numbers that are not easily guessed. Do not share your password with others. </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">If you use a shared Device, always close all active programs and log out before leaving it unattended. </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Avoid using a public wireless network, if possible. If you do use a public network, use the most restrictive wireless network settings on your Device. </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">If you use file-sharing programs, be sure to restrict all other folders or directories to “no share.” </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">Be very cautious with any email requesting you to share personal information. On websites, look for the lock symbol on or near your browser’s address bar which signifies a secure website before supplying personal information. </span></li>\r\n                        <li class=\"li4\"><span class=\"s1\">When participating in one of our communities, blogs, forums, surveys or other open communication platforms, exercise care in selecting what information you share, particularly personal or financial information. </span></li>\r\n                        </ol>\r\n                        <p class=\"p5\"><span class=\"s1\"><b>IX. CHILDREN UNDER 13. </b></span></p>\r\n                        <p>Our Site and Services are not intended for or designed to attract children under the age of 13, and we do not knowingly collect personal information from such children. If we learn that we have inadvertently obtained personal information from a child under the age of 13, we will delete that information as soon as practicable. If you become aware that your child has provided us with personal information without your consent, please contact us immediately at the contact information below. Should this Privacy Policy change, we would comply with the Children’s Online Privacy Protection Act, which requires us to notify and obtain consent from a parent or guardian before we collect, use and disclose the personal information of children who are under 13 years of age.</p>\r\n                        <p>Without limiting the generality of the foregoing, our Site and Services do allow Users above the age of 18 years old – such as parents and guardians – to submit personal information about others, including minors. Such Users assume full responsibility over their submission, use and transmission of such information.</p>\r\n                        <p><b>X. UNITED STATES ONLY. </b></p>\r\n                        <p>Access to our Site and Services is administered in the United States (“US”) and are intended for Users in the US. You may not use our Site or Services in any jurisdiction where offering, accessing or using our Site or Services would be illegal or unlawful. If you are located outside of the US, please note that the information you submit to us will be transferred to the US. By using our Site and/or Services, you consent to this transfer. You also consent to the transfer to and processing of any personal information by us or any of the other parties described in the section “Sharing of Information” above, whether located in the US or any other countries, for the purposes described in this Privacy Policy, or for any other specific purposes to which you consent. If you are located in a country other than the US, you should note that, at present, the laws of the US and certain other countries have not been approved by the European Commission or privacy authorities in certain other countries as providing “adequate protection” for personal information within the meaning of the European Union General Data Protection Regulation or applicable laws of other countries.</p>\r\n                        <p><b>XI. THIRD PARTY SERVICES. </b></p>\r\n                        <p>This Privacy Policy applies only to our Site and Services. It does not apply to services offered by third parties, including websites and other online services that our Site or Services may display links to or advertisements for. When you click on such links or advertisements, you will be visiting websites or interactive services operated by third parties, who have their own information collection practices and may also collect information through the use of tracking tools, such as cookies, web beacons, server logs and the like. When you click on or interact with an ad appearing in our Site or Services, the advertiser or sponsor may infer that you meet targeting criteria that they may have used in connection with the sponsoring such ad. This may lead to similar ads being targeted to you on our Site or Services or elsewhere. We do not have control over how any third party gathers or uses information, so you should review their privacy policies to learn of their information gathering and handling practices.</p>\r\n                        <p><b>XII. CHANGES TO THIS POLICY. </b></p>\r\n                        <p>We continue to improve and enhance our Site and Services. Some of these improvements and enhancements may result in changes to this Privacy Policy. We will post such changes along on this page, and if the changes are significant, we will provide a more prominent notice. Because our Privacy Policy can change at any time, we encourage you to reread it periodically to see if there have been any changes that affect you. We will post the dated that the Privacy Policy was “Last Updated” for your reference. Any changes to the Privacy Policy will go into effect as soon as they are posted to the Site. If you disagree with any changes to this Privacy Policy and do not wish your information to be subject to the revised Privacy Policy, you will need to deactivate your account before the new Privacy Policy becomes effective. Your use of our Site or Services following any such change constitutes your agreement that all information collected from or about you through our Site or Services after the revised Privacy Policy is posted will be subject to the terms of the revised Privacy Policy.</p>\r\n                        <p><b>XIII. VIEWING, UPDATING AND DEACTIVATING INFORMATION. </b></p>\r\n                        <p>Our Site and Services aim to provide you with access to the personal information you submit and the means to update it. This can be accomplished by logging into our Site or Services or contacting us using the contact information below. Under certain circumstances, we may ask you to verify your identity before your request is processed. This will be done free of charge except where it would require a disproportionate effort. We may reject requests that are unreasonably repetitive, require disproportionate technical effort (for example, developing a new system or fundamentally changing an existing practice), risk the privacy of others, or would be extremely impractical (for instance, requests concerning information residing on backup tapes).</p>\r\n                        <p>If you desire to deactivate your account please contact us using the contact information below. Upon your request, your account will be deactivated and your personal information will be securely archived. We retain archived information for a period of five years (or longer as permitted by law) as necessary to comply with legal obligations, resolve disputes and enforce our agreements and other authorized uses under this Privacy Policy.</p>\r\n                        <p>You should also be aware that we store indefinitely non-personal information, including Engagement Data and de-identified personal information, as well as all information that you have shared on any of our public forums, blogs, communities, surveys and the like.</p>\r\n                        <p>Should you have any questions or complaints about the practices described in this Privacy Policy, you may contact us at:</p>\r\n                        <p>Oasis Financial</p>\r\n                        <p class=\"p5\"><span class=\"s1\">9525 West Bryn Mawr Avenue, Suite 900</span></p>\r\n                        <p class=\"p5\"><span class=\"s1\">Rosemont, Illinois 60018<br> Telephone <a href=\"tel:8668717741\">(866) 871-7741</a></span></p>\r\n                        <p class=\"p5\"><span class=\"s1\"><b>XIV. California Privacy Rights</b></span></p>\r\n                        <p class=\"p5\"><span class=\"s1\">Under the California Consumer Privacy Act, California residents have the right to:</span></p>\r\n                        <ul class=\"ul1\">\r\n                        <li class=\"li5\"><span class=\"s1\">Request that a business delete any personal information about the consumer which the business has collected from the consumer.</span></li>\r\n                        </ul>\r\n                        <ul class=\"ul1\">\r\n                        <li class=\"li5\">\r\n                            <span class=\"s1\">Request that a business that collects personal information about the consumer disclose to the consumer, free of charge, the following:</span>\r\n                            <ul class=\"ul1\">\r\n                                <li class=\"li5\"><span class=\"s1\">The categories of personal information that it has collected about that consumer.</span></li>\r\n                                <li class=\"li5\"><span class=\"s1\">The categories of sources from which the personal information is collected.</span></li>\r\n                                <li class=\"li5\"><span class=\"s1\">The business or commercial purpose for collecting or selling personal information.</span></li>\r\n                                <li class=\"li5\"><span class=\"s1\">The categories of third parties with whom the business shares personal information.</span></li>\r\n                                <li class=\"li5\"><span class=\"s1\">The specific pieces of personal information it has collected about that consumer.</span></li>\r\n                            </ul>\r\n                        </li>\r\n                        </ul>\r\n                        <ul class=\"ul1\">\r\n                        <li class=\"li5\">\r\n                            <span class=\"s1\">Request that a business that sells the consumer’s personal information, or that discloses it for a business purpose disclose, free of charge, to the consumer: </span>\r\n                            <ul class=\"ul1\">\r\n                                <li class=\"li5\"><span class=\"s1\">The categories of personal information that the business collected about the consumer.</span></li>\r\n                                <li class=\"li5\"><span class=\"s1\">The categories of personal information that the business sold about the consumer and the categories of third parties to whom the personal was sold, by category or categories of personal information for each third party to whom the personal information was sold.</span></li>\r\n                                <li class=\"li5\"><span class=\"s1\">The categories of personal information that the business disclosed about the consumer for a business purpose.</span></li>\r\n                            </ul>\r\n                        </li>\r\n                        </ul>\r\n                        <ul class=\"ul1\">\r\n                        <li class=\"li5\"><span class=\"s1\">Direct a business that sells personal information about the consumer to third parties not to sell the consumer’s personal information.</span></li>\r\n                        </ul>\r\n                        <p class=\"p5\"><span class=\"s1\">You may submit such requests by contacting us at </span><a href=\"http://www.oasisfinancial.com/privacy-rights/\"><span class=\"s5\">www.oasisfinancial.com/privacy-rights</span></a><span class=\"s1\"> or call the toll-free number <a href=\"tel:8668717741\">(866) 871-7741</a>.<span class=\"Apple-converted-space\">&nbsp; </span>When calling the toll-free number, you will be required to verify your identify by confirming three of the following pieces of information: name; telephone number; city and state; ZIP code; attorney name or law firm; Case ID or date of loss.</span></p>\r\n                        <p class=\"p5\"><span class=\"s1\">You may also designate an authorized agent to make such requests on your behalf by calling the toll-free number <a href=\"tel:8668717741\">(866) 871-7741</a>.</span></p>\r\n                        <p class=\"p5\"><span class=\"s1\">We will not discriminate against you because you exercise any of your California privacy rights.</span></p>', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 13:27:30', '2020-05-12 13:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `resource_contents`
--

CREATE TABLE `resource_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_detail` longtext COLLATE utf8mb4_unicode_ci,
  `long_detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resource_contents`
--

INSERT INTO `resource_contents` (`id`, `title`, `image`, `short_detail`, `long_detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'A Paralegal’s Guide To Plaintiff Pre-Settlement Funding', 'advantage-lending.com_1589285194.jpg', '<p><span style=\"font-family: \"Open Sans\", sans-serif; letter-spacing: 0.5px;\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolorem architecto iusto atque nostrum soluta officia perferendis? Commodi possimus repudiandae iure nulla? Earum repellendus unde voluptates magnam culpa nulla voluptate</span><br></p>', '<section class=\"entry-content \"><p>For paralegals, every day brings another opportunity to help clients, learn more about the law and tackle new challenges. Some of these challenges stem from changes in the legal profession, such as increasing demand for pre-settlement funding.</p><p>When a plaintiff represented by the law firm you work for applies for funding, your boss may ask you, the paralegal, to coordinate the application process with the funding company. Doing so may be relatively straightforward or an exercise in frustration depending on which funding company the plaintiff has chosen. Although you have no say in his or her selection, there are some things you do to expedite the process and protect the client’s interests.</p><p>This comprehensive guide provides tips to help paralegals facilitate the pre-settlement funding process, regardless of which company is involved. Specifically, it will address:</p><ul><li>What information to share with the client prior to the application process</li><li>How to effectively coordinate the application process</li><li>Helping the client get a reasonable deal</li><li>The importance of safeguarding confidential information</li></ul><h2>Information to share with clients prior to the application process</h2><p>As a paralegal, you cannot provide any information that could be construed as legal advice. However, there is certain general information about pre-settlement funding that you can share with clients prior to the application process. For example, you may ask if they have considered or pursued other financial options. This is because pre-settlement funding is typically viewed as a last resort due to potential fees and costs. Be sure they are aware of and understand how these fees and costs are assessed before they apply for pre-settlement funding.</p><h2>Effective coordination of the application process</h2><p>Several factors may disqualify an applicant for pre-settlement funding. Although they may vary, having a general idea of what they are is key to effective coordination of the application process.  In particular, it will allow you to spot them quickly and advise the potential funder accordingly. This will save everyone time and effort in the long run.</p><p>Some of the most common reasons for disqualification are:</p><ul><li><strong>Prior funding.</strong>  A lot of pre-settlement funding providers would rather not accept cases that other companies have previously funded. Therefore, it is important to let the representative from the pre-settlement funding company know about any liens from another company as soon as possible.</li><li><strong>Soft-tissue injuries.</strong> Pre-settlement funding companies often reject applications submitted by plaintiffs with these injuries. However it is not always the case. To find out if the company your client has selected will do so, inform its underwriter about your client’s most significant diagnosed injury.</li><li><strong>Place of residence.</strong>  Some states do not allow pre-settlement funding and various companies do business in different states. Therefore, you should be sure to let a prospective provider know where your client lives.</li><li><strong>Case status.</strong> Some companies don’t want to provide pre-settlement funding if the lawsuit has not been filed. Therefore, it is important to let them know whether or not this has been done.</li></ul><h2>Safeguarding sensitive and confidential information</h2><p>While facilitating the application process, it may be necessary to provide some case details and medical documents to pre-settlement funding companies for your client. This must be done carefully, and you should be careful to never share privileged information with any 3<sup>rd</sup> party.  Here are a few steps you can take to protect your clients’ privacy:</p><ul><li><strong>HIPPA consent form.</strong> Ask the pre-settlement funding company and the client to sign a HIPPA form.</li><li><strong>Verify the client-and-funder contact. </strong>Always confirm with the client that he or she has applied with the company that’s requesting the paperwork. This is essential because some providers will contact law firms prior to consulting plaintiffs.</li><li><strong>Verify status as brokers or direct funders.</strong> Be sure to establish if the company you’re dealing with is a broker or a direct funder. As direct funders, they will likely be the only ones viewing the documents you send them. If they’re pre-settlement funding brokers, a lot of people or institutions may have access to the documents in question.</li></ul><p><em>Oasis provides pre-settlement funding, also known as consumer litigation funding, to its customers through different products depending on their state of residence or cause of action. Many consumers will be provided pre-settlement funding in the form of a purchase agreement, which assigns a portion of the pending proceeds from their legal claim.  </em><a href=\"https://www.oasisfinancial.com/state-specific-licenses/\">Other consumers</a><em>, such as those in CO, IL, MN, MO, SC, WI and some OK residents, will be offered a funding in the form of a pre-settlement loan, sometimes referred to as a lawsuit loan. These transactions have important differences, therefore, consumers should carefully review and be aware of the type of transaction that is offered to them by any funding company.</em></p></section>', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 06:06:34', '2020-05-12 14:06:28'),
(2, 'Can I get a Loan on a Pending Lawsuit?', 'advantage-lending.com_1589285334.jpg', '<p>Lawsuits are intended to provide compensation for personal injuries and other injustices. Filing a lawsuit can…</p>', '<section class=\"entry-content \"><p>Lawsuits are intended to provide compensation for personal injuries and other injustices. Filing a lawsuit can eventually get you the financial compensation you deserve, but the process is very lengthy and can get expensive. Expenses and medical bills can quickly pile up, but it could take well over a year before you finally receive your settlement. If you’re in this position, you may wonder if you can take out a loan against your pending lawsuit proceeds[?] to cover your current expenses.</p><p>Luckily, there are solutions that can help you cover these personal expenses. Legal funding companies offer a number of options to help you through this challenging situation, like pre-settlement funding or <a href=\"https://www.oasisfinancial.com/how-it-works/\">lawsuit loans</a> depending on the type of legal claim you have and your state of residence. Here’s what you need to know about this financial option:</p><h2>Why File a Personal Injury Lawsuit?</h2><p>If you’ve been injured unfairly at the hands of someone else, it’s worth filing a lawsuit for fair compensation. Serious injuries are financially and personally devastating and can change the course of your entire life. While a lawsuit cannot undo this traumatic event, a financial settlement can make life a little easier in the aftermath. Many people who have strong cases for lawsuits choose not to take them because they are overwhelmed by the legal system. You shouldn’t let these things scare you away from getting the compensation you deserve. If you think you may have a case, it’s worth meeting with a lawyer just to get their take on the situation. Most lawyers are happy to offer you a consultation first before committing to their services. Be sure to document the injury extensively to increase the chances of your case being successful.</p><h2>How does Pre-settlement Funding Work?</h2><p>Pre-settlement funding is designed to assist with routine expenses and medical bills during a lawsuit. In some states, it is often referred to as a lawsuit loan or cash advance. However, pre-settlement funding, even when provided in the form of a loan, works differently than a traditional loan. You can usually apply online or over the phone, and unlike a traditional loan, the funding company won’t assess your credit. Instead, the funding company will talk to your lawyer to learn more about the details of your case, and then they will decide if you qualify for funding how much money to provide. You can use that money to pay medical bills and any other expenses that have come up as a result of the injury.</p><p>For example, many people who get seriously injured are unable to work, so you may use the cash as wage replacement for a period of time until you can start making money again. The amount you can get for pre-settlement funding varies based on your specific case.</p><h2>Is Pre-settlement Funding the Right Option for Me?</h2><p>There are many cases in which pre-settlement funding can be very helpful. If you’ve run out of money and need additional funding to get you through during the lawsuit, it’s worth looking into with the guidance of your lawyer. Pre-settlement funding may be what you need to get you through this very trying time.</p><p>Featured Image Credit: <a href=\"https://pixabay.com/users/derneuemann-6406309/\">derneuemann</a>  / <a href=\"https://pixabay.com/photos/bust-no-money-insolvent-bankruptcy-2794420/\">Pixabay</a></p><p><em>Oasis provides pre-settlement funding, also known as consumer litigation funding, to its customers through different products depending on their state of residence or cause of action. Many consumers will be provided pre-settlement funding in the form of a purchase agreement, which assigns a portion of the pending proceeds from their legal claim.  </em><a href=\"https://www.oasisfinancial.com/state-specific-licenses/\">Other consumers</a><em>, such as those in CO, IL, MN, MO, SC, WI and some OK residents, will be offered a funding in the form of a pre-settlement loan, sometimes referred to as a lawsuit loan. These transactions have important differences, therefore, consumers should carefully review and be aware of the type of transaction that is offered to them by any funding company.</em></p></section>', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 06:08:54', '2020-05-12 14:07:58'),
(3, 'How to Shop for Lawsuit Funding', 'advantage-lending.com_1589285403.jpg', '<p><span style=\"color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">Because the resolution of a civil lawsuit can take months – or sometimes even years –…</span><br></p>', '<section class=\"entry-content \"><p>Because the resolution of a civil lawsuit can take months – or sometimes even years – one of the biggest challenges for plaintiffs is to remain patient while their case is pending. This can be especially difficult for plaintiffs in personal injury cases whose injuries prevent them from working. In these circumstances, financial stress can make a difficult situation even worse.</p><p>Lawsuit funding can be a viable source of financial relief for plaintiffs in these circumstances. But with so many sources to choose from, how do you know which one – if any – is best for you? Here is what you should know about shopping for lawsuit funding.</p><h2>What is lawsuit funding?</h2><p>If you are the plaintiff in a personal injury case and you need money to make ends meet until your case is settled, lawsuit funding may be a worthwhile option. It allows you to get a cash advance against your settlement that you can use to pay your medical bills, buy groceries, and make your mortgage payments, rent and so forth. Once your case is resolved the funding company will deduct the amount of the cash funding plus any applicable fees and other charges from the settlement.</p><h3>Eligibility for lawsuit funding</h3><p>Unlike a bank, credit union or similar lender, companies that provide lawsuit funding don’t rely on traditional metrics – such as your credit score – to determine eligibility. Instead, they assess the information about your case provided on your application. They will also talk to your lawyer about the strength of your case, the chances of a settlement or judgment in your favor and its potential value.</p><h3>Choosing an honest provider</h3><p>Critics often warn consumers that the lawsuit funding industry is largely unregulated. They also claim that this allows unscrupulous lenders to charge exorbitant interest rates and incorporate hidden fees into lawsuit loans.</p><p>While this was true in the industry’s infancy, it is not necessarily so now. In recent years, several states have implemented or considered implementing rules and regulations for the industry. The industry has also taken steps to police itself.</p><p>If you are considering a lawsuit funding, don’t be afraid to ask your lawyer for advice. He or she is probably familiar with different providers and should be able to recommend a few.</p><p>The Alliance for Responsible Consumer Legal Funding (ARC)is another good resource. This is because it encourages practices and protocols that allow plaintiffs and their attorneys to make informed decisions. Its ultimate goal is to ensure that accident victims and their families in need of financial reliefs have more options.</p><h2>The different types of lawsuit funding</h2><p>When shopping for lawsuit funding, it is also important to understand that this is actually a broad term that includes several mechanisms for financial relief. Three of the forms a funding is most likely to come in, depending on your state of residence, are a purchase agreement, spring forward agreement or loan.</p><p>Here’s a basic overview of each.</p><h3>Purchase agreements</h3><p>A purchase agreement assigns a portion of the pending proceeds from your legal claim plus any associated charges and fees.</p><h3>Spring forward agreements</h3><p>Although they aren’t widely advertised, spring forward agreements are another mechanism for financial relief. This type of arrangements allows you to sell an asset (such as a portion of your settlement) for a specified price on a future date.</p><p>In other words, you – as a plaintiff in a personal injury case – can enter into a contract to sell some of the proceeds from your settlement for a specific amount immediately.  However, the deal isn’t finalized until the case is resolved. This means you don’t usually have to report the proceeds from the sale as income until that time.</p><h3>Lawsuit Loans</h3><p>Depending on your state of residence, a funding may come in the form of a loan. Similar to a purchase agreement, a lawsuit loan allows you to have quick access to cash against the proceeds of your pending legal settlement. However, in this case, repayment plus charges and fees may be required regardless of the outcome of your case.</p><p>You should also be aware that most other expenses are taken from your settlement or judgment <em>before</em> the funding company deducts its share. These typically include:</p><ul><li>The attorney’s fee (which can be one-third to one-half of the settlement/judgment amount in personal injury cases).</li><li>Any costs associated with the litigation, such as fees for copying and filing relevant documents and paying process servers.</li><li>Those needed to meet any demands for payment for medical services</li></ul><p>Another important caveat is that there is no guarantee your case will be resolved in your favor or that you will get as much in a settlement or judgment as you expected. The details in your loan agreement determine what happens in either case. The company may or may not be able to recoup all or even some of the total amount owed.</p><p>Because these types of transactions can be tricky, however, it is always best to secure the proper legal and financial advice before choosing this option.</p><p>Furthermore, doing your own research and then making an informed decision can also keep you from making a costly mistake.</p><p><em>Oasis provides pre-settlement funding, also known as consumer litigation funding, to its customers through different products depending on their state of residence or cause of action. Many consumers will be provided pre-settlement funding in the form of a purchase agreement, which assigns a portion of the pending proceeds from their legal claim.  </em><a href=\"https://www.oasisfinancial.com/state-specific-licenses/\">Other consumers</a><em>, such as those in CO, IL, MN, MO, SC, WI and some OK residents, will be offered a funding in the form of a pre-settlement loan, sometimes referred to as a lawsuit loan. These transactions have important differences, therefore, consumers should carefully review and be aware of the type of transaction that is offered to them by any funding company.</em></p></section>', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 06:10:03', '2020-05-12 14:08:10'),
(4, 'What is Settlement Funding?', 'advantage-lending.com_1589285449.jpg', '<p><span style=\"color: rgb(33, 37, 41); font-family: proxima-nova, sans-serif; font-size: 20px;\">If you need money to help make ends meet while your lawsuit is pending, settlement funding....</span><br></p>', '<section class=\"entry-content \"><h2>If you need money to help make ends meet while your lawsuit is pending, settlement funding could help</h2><p>Put in its simplest terms, a settlement funding is one form of financing available to plaintiffs in some civil lawsuits. But unlike a traditional loan, which a qualified borrower can secure anytime, settlement funding is only available while a case is pending. This is because it is actually a cash advance made against a settlement or judgment in a civil case.</p><p>This may be a viable option for you if:</p><ul><li>You were injured in an incident caused by someone else;</li><li>You hired a lawyer and sued the responsible party</li><li>You need money to cover living expenses and/or medical costs while your case is pending</li></ul><h2>Here’s how settlement funding works</h2><p>A settlement funding company will usually issue a cash funding to a qualified applicant who is awaiting the outcome of a:</p><ul><li>Personal injury case (one in which you were hurt in an accident caused by someone else’s carelessness)</li><li>Motor vehicle accident case</li><li>Workplace or work-related accident case</li><li>Slip and fall (premises liability) case</li><li>Medical malpractice case</li><li>Product liability case (one in which you were injured by a defective product)</li><li>Wrongful death case (one in which another person’s carelessness causes the death of a loved one)</li></ul><p>To decide if you’re eligible, the settlement funding company assesses the information about your case provided on your application. It will also consult your attorney to get a better idea about the strength of the case, the likelihood that it will be resolved in your favor, and the potential value of a settlement or judgment.</p><p>Because they assume considerable risk, settlement funding companies will only make advances to plaintiffs in cases with the best chances for success.</p><p>If you do get settlement funding, you’ll be liable for any interest and fees in addition to the principal. The good news, however, is that you don’t usually have to make any payments until your case is settled or you receive a judgment. Once a settlement is reached, your attorney fees and related costs will be deducted from that amount, followed by the amount of your settlement funding and fees.</p><h2>Common uses for settlement funding proceeds</h2><p>In most cases, people who apply for settlement funding do so because their injuries prevent them from working while their lawsuits are pending. As a result, they are often faced with the daunting prospect of mounting debt and limited options. In such circumstances, the money from settlement funding can be used to pay medical bills and cover day-to-day expenses.</p><h2>What happens if the case isn’t resolved in my favor?</h2><p>There are two possible outcomes if your case isn’t successfully resolved. The first is that you won’t get anything at all. The second is that your settlement or judgment is less than expected, and less than you agreed to repay.</p><p>In either scenario, this begs a question if you also have settlement funding,are you liable for repayment?  The answer depends on how your settlement funding agreement is structured</p><p>Even if the settlement or judgment is less than expected, and less than you agreed to repay, the settlement funding company won’t necessarily be able to demand the difference. Instead, it may only be able to claim whatever settlement proceeds remain after other costs have been paid, such as attorney fees and court costs.</p><h2>Benefits of settlement funding</h2><p>Settlement funding is appealing for several reasons:</p><ul><li><strong>You’ll get money for living expenses:</strong> Settlement funding is a source of cash that can be used for day-to-day expenses and medical costs while your case is pending.</li><li><strong>In most cases you don’t need good credit to get one: </strong>Unlike traditional lenders, settlement funding companies don’t necessarily consider your credit rating when determining your eligibility for funding. Their focus is on the probability that your case will be resolved in your favor and that the settlement or judgment will be large enough to warrant the risk.</li><li><strong>You can usually get them fairly quickly: </strong>Depending on your specific situation, you may be able to get settlement funding within hours or days.</li><li><strong>You’ll have more time to negotiate: </strong>When you’re pressed for cash, you may feel pressured into accepting the first settlement offer made. Settlement funding can relieve financial stress and allow you to negotiate a better deal.</li></ul><h2>Some additional considerations</h2><p>Although critics claim that the settlement funding industry is largely unregulated, this is no longer the case. Settlement funding companies are not only regulated in many states, but they also follow industry best practices.</p><p>Having said, that, there are a couple of things to be aware of before you decide to get settlement funding. The first is that the total amount deducted from your settlement or judgment will include fees. The second is that lawsuits can drag on for years, so interest can add up quickly. Therefore, you should not be afraid to do some “comparison shopping” and find the company with the lowest rates. You should also know about the type of interest you’ll be liable for (simple or compound) and how it is calculated.</p><p>You should also be aware that settlement funding is a very broad term that includes different means for financial relief. These include purchase agreements, spring forward agreements and settlement loans.</p><p>Here’s what you should know about each.</p><h3><strong>Purchase</strong><strong>  agreements</strong></h3><p>A purchase agreement assigns a portion of the pending proceeds from your legal claim plus any associated fees.</p><h3><strong>Spring forward </strong><strong> agreements</strong></h3><p>Although they aren’t well known to the general public, spring forward agreements are another means of financial relief. They provide for the sale of an asset (such as a portion of your settlement) for a certain price on a future date.</p><p>In other words, you – as a plaintiff in a personal injury case – can be a party to a contract allowing you to sell some or all of the proceeds  from your settlement for a specific amount straight away.  However, the deal isn’t officially wrapped up until the case is resolved. This means you don’t usually have to report the proceeds from the sale as income until that time.</p><h3>Settlement loans</h3><p>Depending on your state of residence, a settlement funding may come in the form of a settlement loan. Similar to purchase agreements, settlement loans allow you to have quick access to cash against the proceeds of your pending legal settlement. However, in this case, repayment is often required regardless of the outcome of your case.</p><h2>In conclusion…</h2><p>If you were injured in an accident or incident where someone else was at fault, your recovery should be your first priority. But if you have been unable to work because of your injuries, financial stress can complicate matters even further.</p><p>If you sued the person that caused the accident in which you were hurt, settlement funding may provide much-needed financial relief while your lawsuit is pending. If you qualify for one, you can use the money to pay your medical bills or living expenses. The amount you’ve borrowed will be deducted from any settlement or judgment you receive.</p><p><em>Oasis provides pre-settlement funding, also known as consumer litigation funding, to its customers through different products depending on their state of residence or cause of action. Many consumers will be provided pre-settlement funding in the form of a purchase agreement, which assigns a portion of the pending proceeds from their legal claim.  </em><a href=\"https://www.oasisfinancial.com/state-specific-licenses/\">Other consumers</a><em>, such as those in CO, IL, MN, MO, SC, WI and some OK residents, will be offered a funding in the form of a pre-settlement loan, sometimes referred to as a lawsuit loan. These transactions have important differences, therefore, consumers should carefully review and be aware of the type of transaction that is offered to them by any funding company.</em></p><p>Featured Image credit: <a href=\"https://pixabay.com/users/gracinistudios-12649211/\">gracinistudios</a> / <a href=\"https://pixabay.com/photos/girl-boy-dating-cafe-couple-cute-4256556/\">Pixabay</a></p></section>', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 06:10:49', '2020-05-12 14:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `resource_content_infos`
--

CREATE TABLE `resource_content_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resource_content_infos`
--

INSERT INTO `resource_content_infos` (`id`, `detail`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '<p class=\"p1\"><span class=\"s1\">Are you having difficulty in making ends meet? Trying to figure out what “pre-settlement funding” means or how it works? Check out the resources below for useful tips on how to protect your family and your finances. If you still have questions, feel free to </span><span class=\"s2\">call</span><span class=\"s1\"> or <a class=\"color_or\" href=\"http://192.168.0.3/advantage-lending/public/contactus\"><span class=\"s2\">contact us</span></a> and we’ll do our best to get you the answers that you are looking for. Better Days Start Today!</span></p>', NULL, NULL, NULL, NULL, '2020-05-12 04:28:51', '2020-05-12 06:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `resource_page_settings`
--

CREATE TABLE `resource_page_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_show_item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resource_page_settings`
--

INSERT INTO `resource_page_settings` (`id`, `title`, `detail`, `background_image`, `background_forecolor`, `default_show_item`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Resources', '<p class=\"p1\"><span class=\"s1\">Are you having difficulty in making ends meet? Trying to figure out what “pre-settlement funding” means or how it works? Check out the resources below for useful tips on how to protect your family and your finances. If you still have questions, feel free to </span><span class=\"s2\">call</span><span class=\"s1\"> or <a href=\"/contact-us\"><span class=\"s2\">contact us</span></a> and we’ll do our best to get you the answers that you are looking for. Better Days Start Today!</span></p>', 'advantage-lending.com_1589315075.jpeg', '#133d8d', '5', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 14:24:35', '2020-05-12 14:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_toll_free_call_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_apply_button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_right_reserved_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_page_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_page_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_page_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_page_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus_page_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_title`, `top_logo`, `bottom_logo`, `contact_number`, `email`, `top_toll_free_call_message`, `top_apply_button_text`, `bottom_copyright_text`, `bottom_right_reserved_text`, `facebook_page_link`, `twitter_page_link`, `linkedin_page_link`, `youtube_page_link`, `google_plus_page_link`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Advantage Lending', 'Advantage Lending', 'advantage-lending.com_1589231115.png', 'advantage-lending.com_1589231105.png', '+0123 1205 1010', 'yourmail@gmail.com', 'Call toll free (877) 333-6680 anytime', 'Apply Now', 'Copyright ©2020', 'All Rights Reserved', 'https://www.facebook.com/', 'https://twitter.com/explore', 'https://www.linkedin.com/home?originalSubdomain=bd', 'https://www.youtube.com/', NULL, 'Active', NULL, NULL, NULL, NULL, '2020-05-11 15:05:05', '2020-05-11 16:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `animated_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_color_scheme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading_one`, `heading_two`, `animated_text`, `heading_three`, `heading_four`, `slider_button_text`, `slider_button_url`, `slider_color_scheme`, `slider_background_image`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Welcome !', 'To Advantage - Lending.Com', 'What About Your Bill,How Will You Pay Your House Rent,Your Life is Most Important', 'Don\'t Settle For Less Than You Deserve.', 'Get Cash Now While You Wait For Your Full Settlement.', 'Apply Now', '#appointment', 'rgba(255, 116, 26, 0.8)', 'advantage-lending.com_1589236474.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-11 16:34:34', '2020-05-11 16:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `state_specific_licenseses`
--

CREATE TABLE `state_specific_licenseses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_content` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state_specific_licenseses`
--

INSERT INTO `state_specific_licenseses` (`id`, `title`, `background_image`, `background_forecolor`, `page_content`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'State-Specific Licenses', 'advantage-lending.com_1589313365.jpeg', '#133d8d', '<p class=\"p1\"><span class=\"s1\">Oasis Financial is able to provide legal funding in most states. If you live in Arkansas, Kansas, Kentucky, Maryland, Nevada, North Carolina, or West Virginia, we’re not able to provide pre-settlement funding at this time. For other state-specific information, see the listings below.</span></p>\r\n                        <p class=\"p1\"><span class=\"s1\">Oasis provides funding for Workers’ Compensations cases in Connecticut, Florida, Georgia, Illinois, Indiana, Louisiana, Missouri, New Mexico, Ohio, Oklahoma, and South Carolina, only.</span></p>\r\n                        <p> </p>\r\n                        <h2>Alabama</h2>\r\n                        <p class=\"p1\"><span class=\"s1\">OFLC, LLC is licensed to make loans by the State of Alabama State Banking Department.</span></p>\r\n                        <p class=\"p3\"><span class=\"s2\"><a href=\"http://www.oasisfinancial.com/wp-content/uploads/2020/03/License-Certificate-AL-2019-2020...pdf\" target=\"_blank\" rel=\"noopener noreferrer\">Alabama License</a></span><span class=\"s1\"> </span></p>\r\n                        <p> </p>\r\n                        <h2>Illinois</h2>\r\n                        <p class=\"p1\"><span class=\"s1\">Oasis Legal Finance, LLC is licensed in the state of Illinois in accordance with the Consumer Installment Loan Act. In Illinois, Oasis considers lawsuit financing a limited recourse loan.<br> </span></p>\r\n                        <p> </p>\r\n                        <h2>Missouri</h2>\r\n                        <p class=\"p1\"><span class=\"s1\">Oasis Legal Finance, LLC is licensed to make loans by the State of Missouri Division of Finance.</span></p>\r\n                        <p class=\"p3\"><span class=\"s2\"><a href=\"http://www.oasisfinancial.com/wp-content/uploads/2020/03/Website-License-and-Disclosure-2019-2020.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">Missouri Disclosure and License</a></span><span class=\"s1\"> </span></p>\r\n                        <p> </p>\r\n                        <h2>Oklahoma</h2>\r\n                        <p class=\"p1\"><span class=\"s1\">OFLC, LLC is a Supervised Lender in the state of Oklahoma.</span></p>\r\n                        <p class=\"p3\"><span class=\"s2\"><a href=\"/wp-content/uploads/2019/02/OK_License_Expires12-31-2021.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">Oklahoma License</a></span></p>\r\n                        <p> </p>\r\n                        <h2>South Carolina</h2>\r\n                        <p class=\"p1\"><span class=\"s1\">Oasis Legal Finance, LLC is licensed to make loans by the state of South Carolina State Board of Financial Institutions.</span></p>\r\n                        <p class=\"p1\"><span class=\"s3\"><a href=\"https://www.oasisfinancial.com/wp-content/uploads/2019/10/SC_ConsumerPamplet-rev.-10.2019.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">South Carolina Consumer Pamphlet</a></span><span class=\"s1\"> for information about your rights as a borrower</span></p>\r\n                        <p class=\"p3\"><span class=\"s2\"><a href=\"/wp-content/uploads/2019/02/SC_Disclosure_Expires1-31-2019.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">South Carolina Maximum Rate Disclosure</a></span></p>\r\n                        <p class=\"p3\"><span class=\"s2\"><a href=\"/wp-content/uploads/2019/02/SC_License_Expires1-31-2019.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">South Carolina Licensing Information</a></span></p>', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 13:56:05', '2020-05-12 14:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `structured_settlement_application_forms`
--

CREATE TABLE `structured_settlement_application_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_over_18` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT '0',
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `when_did_your_case_settle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount_of_the_award` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_much_receive_each_payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_much_do_you_need_now` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer_your_application` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settlement_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_responsible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relevant_experience` longtext COLLATE utf8mb4_unicode_ci,
  `education` longtext COLLATE utf8mb4_unicode_ci,
  `member_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `member_name`, `member_designation`, `member_responsible`, `relevant_experience`, `education`, `member_image`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Greg Zeeman', 'Chief Executive Officer', 'Responsible for Mission, Vision and Growth', '20+ years of leadership experience in consumer lending, specialty finance organizations including serving as COO for Enova International and COO for HSBC USA,Former CEO for Main Street Renewal, a leading privately held multi-market single family real estate rental company', 'B.A. Economics and Political Science, University of North Carolina,M.B.A., Harvard Business School', 'advantage-lending.com_1589353535.jpg', 'Active', NULL, NULL, NULL, '2020-05-13 04:47:01', '2020-05-13 01:05:35', '2020-05-13 04:47:01'),
(2, 'Greg Zeeman', 'Chief Executive Officer', 'Responsible for Mission, Vision and Growth', '[\"20+ years of leadership experience in consumer lending, specialty finance organizations including serving as COO for Enova International and COO for HSBC USA\",\"Former CEO for Main Street Renewal, a leading privately held multi-market single family real estate rental company\"]', '[\"B.A. Economics and Political Science, University of North Carolina\",\"M.B.A., Harvard Business School\"]', 'advantage-lending.com_1589366817.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 04:46:57', '2020-05-13 04:46:57'),
(3, 'Griffin Gordon', 'Chief Operating Officer', 'Responsible for Operations, Analytics and Business Strategy', '[\"Led 500+ person business, Performant Recovery, that provides asset recovery services to federal agency, state government and corporate clients\",\"10+ years of financial services and technology experience as both as an operator and investor\"]', '[\"B.A., Dartmouth College\",\"M.B.A., University of Chicago Booth School of Business\"]', 'advantage-lending.com_1589379965.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 08:26:05', '2020-05-13 08:26:05'),
(4, 'Phil Greenberg', 'General Counsel', 'Responsible for Legal, Regulatory, Business Development and Strategy', '[\"Entrepreneur with 10+ years as CEO and founder of a successful plaintiff funding company\",\"Developed a private label mortgage origination product for credit unions\",\"M&A and Structured Finance attorney, most recently with Cadwalader Wickersham & Taft\"]', '[\"B.A., SUNY Stony Brook\",\"JD, Brooklyn Law School\"]', 'advantage-lending.com_1589380054.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 08:27:34', '2020-05-13 08:27:34'),
(5, 'Mohammed Hanif', 'Chief Information Officer', 'Responsible for Technology Strategy and Execution', '[\"Diverse background in a variety of technology roles across several industries\",\"Implemented several multi-million-dollar cost saving initiatives\",\"Implemented multi-country ERP systems\"]', '[\"B.S. Computer Engineering, University of Illinois Urbana-Champaign\",\"M.B.A., Northwestern University \\u2013 Kellogg School of Management\"]', 'advantage-lending.com_1589380133.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 08:28:53', '2020-05-13 08:28:53'),
(6, 'Jeff Trigilio', 'EVP, Founder of Key Health', 'Responsible for Medical Lien Sales', '[\"Pioneer in developing the medical lien financing industry\",\"40 years running successful businesses in medical financing and medical provider services\",\"Founder of Key Health Group, Inc., the largest medical lien funding company in the U.S.\"]', '[\"B.S. Nuclear Medicine, Rochester Institute of Technology\",\"Graduate Research, SUNY Buffalo\"]', 'advantage-lending.com_1589380216.jpg', 'Active', NULL, NULL, NULL, NULL, '2020-05-13 08:30:16', '2020-05-13 08:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `terms_of_uses`
--

CREATE TABLE `terms_of_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_content` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_of_uses`
--

INSERT INTO `terms_of_uses` (`id`, `title`, `background_image`, `background_forecolor`, `page_content`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Terms Of Use', 'advantage-lending.com_1589312966.jpeg', '#133d8d', '<p class=\"p1\"><span class=\"s1\"><b>Website Terms of Use</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">Last Modified: February 28, 2019</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Acceptance of the Terms of Use</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">These terms of use are entered into by and between You and Oasis Financial (“<b>Company</b>“, “<b>we</b>” or “<b>us</b>“). The following terms and conditions, together with any documents they expressly incorporate by reference (collectively, these “<b>Terms of Use</b>“), govern your access to and use of oasisfinancial.com, including any content, functionality and services offered on or through oasisfinancial.com (the “<b>Website</b>“), whether as a guest or a registered user.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">Please read the Terms of Use carefully before you start to use the Website. <b>By using the Website, you accept and agree to be bound and abide by these Terms of Use.</b> If you do not want to agree to these Terms of Use, you must not access or use the Website. </span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">This Website is offered and available to users who are 18 years of age or older. By using this Website, you represent and warrant that you are of legal age to form a binding contract with the Company and meet all the foregoing eligibility requirements. If you do not meet all these requirements, you must not access or use the Website.&nbsp;</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">Oasis Financial makes no representation that lawsuit financing information or other material on this site is appropriate or available for in any State, jurisdiction, or territory where Oasis Financial does not conduct business, and access to this site from any State, jurisdiction, or territory where its content is illegal is prohibited. If you choose to access this site from any State, jurisdiction, or territory where Oasis Financial does not conduct business, you do so on your own initiative and are responsible for compliance with applicable local laws, including those for lawsuit financing, if any.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Changes to the Terms of Use</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">We may revise and update these Terms of Use from time to time in our sole discretion. All changes are effective immediately when we post them. However, any changes to the dispute resolution provisions set forth in Governing Law and Jurisdiction will not apply to any disputes for which the parties have actual notice prior to the date the change is posted on the Website.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">Your continued use of the Website following the posting of revised Terms of Use means that you accept and agree to the changes. You are expected to check this page each time you access this Website so you are aware of any changes, as they are binding on you.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Accessing the Website and Account Security</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">We reserve the right to withdraw or amend this Website, and any service or material we provide on the Website, in our sole discretion without notice. We will not be liable if for any reason all or any part of the Website is unavailable at any time or for any period. From time to time, we may restrict access to some parts of the Website, or the entire Website, to users.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">You are responsible for:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">Making all arrangements necessary for you to have access to the Website.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Ensuring that all persons who access the Website through your internet connection are aware of these Terms of Use and comply with them.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s1\">To access the Website or some of the resources it offers, you may be asked to provide certain registration details or other information. It is a condition of your use of the Website that all the information you provide on the Website is correct, current and complete. You agree that all information you provide to register with this Website or otherwise, including but not limited to through the use of any interactive features on the Website, is governed by our <a href=\"/privacy-policy/\"><span class=\"s4\">Privacy Policy</span></a>, and you consent to all actions we take with respect to your information consistent with our Privacy Policy.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">If you choose, or are provided with, a user name, password or any other piece of information as part of our security procedures, you must treat such information as confidential, and you must not disclose it to any other person or entity. You also acknowledge that your account is personal to you and agree not to provide any other person with access to this Website or portions of it using your user name, password or other security information. You agree to notify us immediately of any unauthorized access to or use of your user name or password or any other breach of security. You also agree to ensure that you exit from your account at the end of each session. You should use particular caution when accessing your account from a public or shared computer so that others are not able to view or record your password or other personal information.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">We have the right to disable any user name, password or other identifier, whether chosen by you or provided by us, at any time in our sole discretion for any or no reason, including if, in our opinion, you have violated any provision of these Terms of Use.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Intellectual Property Rights</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">The Website and its entire contents, features and functionality (including but not limited to all information, software, text, displays, images, video and audio, and the design, selection and arrangement thereof), are owned by the Company, its licensors or other providers of such material and are protected by United States and international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">These Terms of Use permit you to use the Website for your personal, non-commercial use only. You must not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store or transmit any of the material on our Website, except as follows:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">Your computer may temporarily store copies of such materials in RAM incidental to your accessing and viewing those materials.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">You may store files that are automatically cached by your Web browser for display enhancement purposes.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">You may print or download one copy of a reasonable number of pages of the Website for your own personal, non-commercial use and not for further reproduction, publication or distribution.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">If we provide desktop, mobile or other applications for download, you may download a single copy to your computer or mobile device solely for your own personal, non-commercial use, provided you agree to be bound by our end user license agreement for such applications.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">If we provide social media content with certain content, you may take such actions as are enabled by such features.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s1\">You must not:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">Modify copies of any materials from this site.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Use any illustrations, photographs, video or audio sequences or any graphics separately from the accompanying text.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Delete or alter any copyright, trademark or other proprietary rights notices from copies of materials from this site.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s1\">You must not access or use for any commercial purposes any part of the Website or any services or materials available through the Website. </span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">If you print, copy, modify, download or otherwise use or provide any other person with access to any part of the Website in breach of the Terms of Use, your right to use the Website will cease immediately and you must, at our option, return or destroy any copies of the materials you have made. No right, title or interest in or to the Website or any content on the Website is transferred to you, and all rights not expressly granted are reserved by the Company. Any use of the Website not expressly permitted by these Terms of Use is a breach of these Terms of Use and may violate copyright, trademark and other laws.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Trademarks</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">The Company name, the terms OASIS, OASIS FINANCIAL, OASIS STRUCTURED SETTLEMENTS, OASIS MEDICAL LIENS, OASIS INHERITANCE, OASIS FINANCIAL BECAUSE LIFE MOVES FASTER THAN YOUR CASE, OASIS FINANCIAL BECAUSE LIFE MOVES FASTER THAN YOUR CASE (STYLIZED), OASIS LEGAL FINANCE, and all related names, logos, product and service names, designs and slogans are trademarks of the Company or its affiliates or licensors. You must not use such marks without the prior written permission of the Company. All other names, logos, product and service names, designs and slogans on this Website are the trademarks of their respective owners.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Prohibited Uses</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">You may use the Website only for lawful purposes and in accordance with these Terms of Use. You agree not to use the Website:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">In any way that violates any applicable federal, state, local or international law or regulation (including, without limitation, any laws regarding the export of data or software to and from the US or other countries). </span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">For the purpose of exploiting, harming or attempting to exploit or harm minors in any way by exposing them to inappropriate content, asking for personally identifiable information or otherwise.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">To send, knowingly receive, upload, download, use or re-use any material which does not comply with the </span><a href=\"#contentstandards\"><span class=\"s4\">Content Standards</span></a><span class=\"s1\"> set out in these Terms of Use.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">To transmit, or procure the sending of, any advertising or promotional material without our prior written consent, including any “junk mail”, “chain letter” or “spam” or any other similar solicitation.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">To impersonate or attempt to impersonate the Company, a Company employee, another user or any other person or entity (including, without limitation, by using e-mail addresses associated with any of the foregoing).</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment of the Website, or which, as determined by us, may harm the Company or users of the Website or expose them to liability.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s1\">Additionally, you agree not to:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">Use the Website in any manner that could disable, overburden, damage, or impair the site or interfere with any other party’s use of the Website, including their ability to engage in real time activities through the Website.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Use any robot, spider or other automatic device, process or means to access the Website for any purpose, including monitoring or copying any of the material on the Website.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Use any manual process to monitor or copy any of the material on the Website or for any other unauthorized purpose without our prior written consent.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Use any device, software or routine that interferes with the proper working of the Website.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Introduce any viruses, trojan horses, worms, logic bombs or other material which is malicious or technologically harmful.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Attempt to gain unauthorized access to, interfere with, damage or disrupt any parts of the Website, the server on which the Website is stored, or any server, computer or database connected to the Website. </span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Attack the Website via a denial-of-service attack or a distributed denial-of-service attack.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Otherwise attempt to interfere with the proper working of the Website.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>User Contributions</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">The Website may contain message boards, chat rooms, personal web pages or profiles, forums, bulletin boards, and other interactive features (collectively, “<b>Interactive Services</b>“) that allow users to post, submit, publish, display or transmit to other users or other persons (hereinafter, “<b>post</b>“) content or materials (collectively, “<b>User Contributions</b>“) on or through the Website.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">All User Contributions must comply with the Content Standards set out in these Terms of Use.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">Any User Contribution you post to the site will be considered non-confidential and non-proprietary. By providing any User Contribution on the Website, you grant us and our affiliates and service providers, and each of their and our respective licensees, successors and assigns the right to use, reproduce, modify, perform, display, distribute and otherwise disclose to third parties any such material for any purpose. </span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">You represent and warrant that: </span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">You own or control all rights in and to the User Contributions and have the right to grant the license granted above to us and our affiliates and service providers, and each of their and our respective licensees, successors and assigns.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">All of your User Contributions do and will comply with these Terms of Use. </span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s1\">You understand and acknowledge that you are responsible for any User Contributions you submit or contribute, and you, not the Company, have fully responsibility for such content, including its legality, reliability, accuracy and appropriateness.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">We are not responsible, or liable to any third party, for the content or accuracy of any User Contributions posted by you or any other user of the Website.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Monitoring and Enforcement; Termination</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">We have the right to:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">Remove or refuse to post any User Contributions for any or no reason in our sole discretion.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Take any action with respect to any User Contribution that we deem necessary or appropriate in our sole discretion, including if we believe that such User Contribution violates the Terms of Use, including the Content Standards, infringes any intellectual property right or other right of any person or entity, threatens the personal safety of users of the Website or the public or could create liability for the Company.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Disclose your identity or other information about you to any third party who claims that material posted by you violates their rights, including their intellectual property rights or their right to privacy.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Take appropriate legal action, including without limitation, referral to law enforcement, for any illegal or unauthorized use of the Website. </span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Terminate or suspend your access to all or part of the Website for any violation of these Terms of Use.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s1\">Without limiting the foregoing, we have the right to fully cooperate with any law enforcement authorities or court order requesting or directing us to disclose the identity or other information of anyone posting any materials on or through the Website. YOU WAIVE AND HOLD HARMLESS THE COMPANY AND ITS AFFILIATES, LICENSEES AND SERVICE PROVIDERS FROM ANY CLAIMS RESULTING FROM ANY ACTION TAKEN BY ANY OF THE FOREGOING PARTIES DURING OR AS A RESULT OF ITS INVESTIGATIONS AND FROM ANY ACTIONS TAKEN AS A CONSEQUENCE OF INVESTIGATIONS BY EITHER SUCH PARTIES OR LAW ENFORCEMENT AUTHORITIES.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">However, we do not undertake to review all material before it is posted on the Website and cannot ensure prompt removal of objectionable material after it has been posted. Accordingly, we assume no liability for any action or inaction regarding transmissions, communications or content provided by any user or third party. We have no liability or responsibility to anyone for performance or nonperformance of the activities described in this section.</span></p>\r\n                            <p id=\"contentstandards\" class=\"p2\"><span class=\"s2\"><b>Content Standards</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">These content standards apply to any and all User Contributions and use of Interactive Services. User Contributions must in their entirety comply with all applicable federal, state, local and international laws and regulations. Without limiting the foregoing, User Contributions must not:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">Contain any material which is defamatory, obscene, indecent, abusive, offensive, harassing, violent, hateful, inflammatory or otherwise objectionable.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Promote sexually explicit or pornographic material, violence, or discrimination based on race, sex, religion, nationality, disability, sexual orientation or age.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Infringe any patent, trademark, trade secret, copyright or other intellectual property or other rights of any other person.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Violate the legal rights (including the rights of publicity and privacy) of others or contain any material that could give rise to any civil or criminal liability under applicable laws or regulations or that otherwise may be in conflict with these Terms of Use and our <a href=\"/privacy-policy/\"><span class=\"s4\">Privacy Policy</span></a>.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Be likely to deceive any person.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Promote any illegal activity, or advocate, promote or assist any unlawful act.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Cause annoyance, inconvenience or needless anxiety or be likely to upset, embarrass, alarm or annoy any other person.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Impersonate any person, or misrepresent your identity or affiliation with any person or organization. </span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Involve commercial activities or sales, such as contests, sweepstakes and other sales promotions, barter or advertising.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Give the impression that they emanate from or are endorsed by us or any other person or entity, if this is not the case.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Copyright Infringement</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">If you believe that any User Contributions violate your copyright, please contact us to provide notice of copyright infringement. It is the policy of the Company to terminate the user accounts of repeat infringers.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Reliance on Information Posted</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">The information presented on or through the Website is made available solely for general information purposes. We do not warrant the accuracy, completeness or usefulness of this information. Any reliance you place on such information is strictly at your own risk. We disclaim all liability and responsibility arising from any reliance placed on such materials by you or any other visitor to the Website, or by anyone who may be informed of any of its contents.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">This Website may include content provided by third parties, including materials provided by other users, bloggers and third-party licensors, syndicators, aggregators and/or reporting services. All statements and/or opinions expressed in these materials, and all articles and responses to questions and other content, other than the content provided by the Company, are solely the opinions and the responsibility of the person or entity providing those materials. These materials do not necessarily reflect the opinion of the Company. We are not responsible, or liable to you or any third party, for the content or accuracy of any materials provided by any third parties.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Changes to the Website</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">We may update the content on this Website from time to time, but its content is not necessarily complete or up-to-date. Any of the material on the Website may be out of date at any given time, and we are under no obligation to update such material.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Information About You and Your Visits to the Website</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">All information we collect on this Website is subject to our <a href=\"/privacy-policy/\"><span class=\"s4\">Privacy Policy</span></a>. By using the Website, you consent to all actions taken by us with respect to your information in compliance with the Privacy Policy.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Linking to the Website and Social Media Features</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">You may link to our homepage, provided you do so in a way that is fair and legal and does not damage our reputation or take advantage of it, but you must not establish a link in such a way as to suggest any form of association, approval or endorsement on our part</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">This Website may provide certain social media features that enable you to:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">Link from your own or certain third-party websites to certain content on this Website.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Send e-mails or other communications with certain content, or links to certain content, on this Website.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Cause limited portions of content on this Website to be displayed or appear to be displayed on your own or certain third-party websites.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s1\">You may use these features solely as they are provided by us, solely with respect to the content they are displayed with and otherwise in accordance with any additional terms and conditions we provide with respect to such features. Subject to the foregoing, you must not:</span></p>\r\n                            <ul class=\"ul1\">\r\n                               <li class=\"li2\"><span class=\"s1\">Establish a link from any website that is not owned by you.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Cause the Website or portions of it to be displayed, or appear to be displayed by, for example, framing, deep linking or in-line linking, on any other site.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Link to any part of the Website other than the homepage.</span></li>\r\n                               <li class=\"li2\"><span class=\"s1\">Otherwise take any action with respect to the materials on this Website that is inconsistent with any other provision of these Terms of Use.</span></li>\r\n                            </ul>\r\n                            <p class=\"p2\"><span class=\"s1\">The website from which you are linking, or on which you make certain content accessible, must comply in all respects with the Content Standards set out in these Terms of Use.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">You agree to cooperate with us in causing any unauthorized framing or linking immediately to cease. We reserve the right to withdraw linking permission without notice.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">We may disable all or any social media features and any links at any time without notice in our discretion.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Links from the Website</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">If the Website contains links to other sites and resources provided by third parties, these links are provided for your convenience only. This includes links contained in advertisements, including banner advertisements and sponsored links. We have no control over the contents of those sites or resources and accept no responsibility for them or for any loss or damage that may arise from your use of them. If you decide to access any of the third-party websites linked to this Website, you do so entirely at your own risk and subject to the terms and conditions of use for such websites.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Geographic Restrictions</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">The owner of the Website is based in the State of Illinois in the United States. We provide this Website for use only by persons located in the United States. We make no claims that the Website or any of its content is accessible or appropriate outside of the United States. Access to the Website may not be legal by certain persons or in certain countries. If you access the Website from outside the United States, you do so on your own initiative and are responsible for compliance with local laws.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Disclaimer of Warranties</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">You understand that we cannot and do not guarantee or warrant that files available for downloading from the internet or the Website will be free of viruses or other destructive code. You are responsible for implementing sufficient procedures and checkpoints to satisfy your particular requirements for anti-virus protection and accuracy of data input and output, and for maintaining a means external to our site for any reconstruction of any lost data. WE WILL NOT BE LIABLE FOR ANY LOSS OR DAMAGE CAUSED BY A DISTRIBUTED DENIAL-OF-SERVICE ATTACK, VIRUSES OR OTHER TECHNOLOGICALLY HARMFUL MATERIAL THAT MAY INFECT YOUR COMPUTER EQUIPMENT, COMPUTER PROGRAMS, DATA OR OTHER PROPRIETARY MATERIAL DUE TO YOUR USE OF THE WEBSITE OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE OR TO YOUR DOWNLOADING OF ANY MATERIAL POSTED ON IT, OR ON ANY WEBSITE LINKED TO IT.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">YOUR USE OF THE WEBSITE, ITS CONTENT AND ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE IS AT YOUR OWN RISK. THE WEBSITE, ITS CONTENT AND ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS, WITHOUT ANY WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED. NEITHER THE COMPANY NOR ANY PERSON ASSOCIATED WITH THE COMPANY MAKES ANY WARRANTY OR REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY, RELIABILITY, QUALITY, ACCURACY OR AVAILABILITY OF THE WEBSITE. WITHOUT LIMITING THE FOREGOING, NEITHER THE COMPANY NOR ANYONE ASSOCIATED WITH THE COMPANY REPRESENTS OR WARRANTS THAT THE WEBSITE, ITS CONTENT OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE WILL BE ACCURATE, RELIABLE, ERROR-FREE OR UNINTERRUPTED, THAT DEFECTS WILL BE CORRECTED, THAT OUR SITE OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT THE WEBSITE OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE WILL OTHERWISE MEET YOUR NEEDS OR EXPECTATIONS. </span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">THE COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT AND FITNESS FOR PARTICULAR PURPOSE.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Limitation on Liability</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">IN NO EVENT WILL THE COMPANY, ITS AFFILIATES OR THEIR LICENSORS, SERVICE PROVIDERS, EMPLOYEES, AGENTS, OFFICERS OR DIRECTORS BE LIABLE FOR DAMAGES OF ANY KIND, UNDER ANY LEGAL THEORY, ARISING OUT OF OR IN CONNECTION WITH YOUR USE, OR INABILITY TO USE, THE WEBSITE, ANY WEBSITES LINKED TO IT, ANY CONTENT ON THE WEBSITE OR SUCH OTHER WEBSITES OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE OR SUCH OTHER WEBSITES, INCLUDING ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL OR PUNITIVE DAMAGES, INCLUDING BUT NOT LIMITED TO, PERSONAL INJURY, PAIN AND SUFFERING, EMOTIONAL DISTRESS, LOSS OF REVENUE, LOSS OF PROFITS, LOSS OF BUSINESS OR ANTICIPATED SAVINGS, LOSS OF USE, LOSS OF GOODWILL, LOSS OF DATA, AND WHETHER CAUSED BY TORT (INCLUDING NEGLIGENCE), BREACH OF CONTRACT OR OTHERWISE, EVEN IF FORESEEABLE.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">THE FOREGOING DOES NOT AFFECT ANY LIABILITY WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Indemnification</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">You agree to defend, indemnify and hold harmless the Company, its affiliates, licensors and service providers, and its and their respective officers, directors, employees, contractors, agents, licensors, suppliers, successors and assigns from and against any claims, liabilities, damages, judgments, awards, losses, costs, expenses or fees (including reasonable attorneys’ fees) arising out of or relating to your violation of these Terms of Use or your use of the Website, including, but not limited to, your User Contributions, any use of the Website’s content, services and products other than as expressly authorized in these Terms of Use or your use of any information obtained from the Website.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Governing Law and Jurisdiction</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">All matters relating to the Website and these Terms of Use and any dispute or claim arising therefrom or related thereto (in each case, including non-contractual disputes or claims), shall be governed by and construed in accordance with the internal laws of the State of Illinois without giving effect to any choice or conflict of law provision or rule (whether of the State of Illinois or any other jurisdiction).</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">Any legal suit, action or proceeding arising out of, or related to, these Terms of Use or the Website shall be instituted exclusively in the federal courts of the United States or the courts of the State of Illinois in each case located in the County of Cook County, Illinois. You waive any and all objections to the exercise of jurisdiction over you by such courts and to venue in such courts.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Arbitration</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">At Company’s sole discretion, it may require You to submit any disputes arising from the use of these Terms of Use or the Website, including disputes arising from or concerning their interpretation, violation, invalidity, non-performance, or termination, to final and binding arbitration under the Rules of Arbitration of the American Arbitration Association applying Illinois law.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Limitation on Time to File Claims</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">ANY CAUSE OF ACTION OR CLAIM YOU MAY HAVE ARISING OUT OF OR RELATING TO THESE TERMS OF USE OR THE WEBSITE MUST BE COMMENCED WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES, OTHERWISE, SUCH CAUSE OF ACTION OR CLAIM IS PERMANENTLY BARRED.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Waiver and Severability</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">No waiver of by the Company of any term or condition set forth in these Terms of Use shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition, and any failure of the Company to assert a right or provision under these Terms of Use shall not constitute a waiver of such right or provision.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">If any provision of these Terms of Use is held by a court or other tribunal of competent jurisdiction to be invalid, illegal or unenforceable for any reason, such provision shall be eliminated or limited to the minimum extent such that the remaining provisions of the Terms of Use will continue in full force and effect.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Entire Agreement</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">The Terms of Use and our Privacy Policy constitute the sole and entire agreement between you and Oasis Financial with respect to the Website and supersede all prior and contemporaneous understandings, agreements, representations and warranties, both written and oral, with respect to the Website.</span></p>\r\n                            <p class=\"p2\"><span class=\"s2\"><b>Your Comments and Concerns</b></span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">This website is operated by Oasis Financial, 9525 W. Bryn Mawr Ave., Suite 900, Rosemont, Illinois 60018.</span></p>\r\n                            <p class=\"p2\"><span class=\"s1\">All other feedback, comments, requests for technical support, notices of copyright infringement claims and other communications relating to the Website should be submitted via the <a href=\"/contact-us/\">Contact Us</a> page.</span></p>', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 13:49:26', '2020-05-12 13:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_funding_page_settings`
--

CREATE TABLE `types_of_funding_page_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_detail` longtext COLLATE utf8mb4_unicode_ci,
  `case_fund_heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_fund_detail` longtext COLLATE utf8mb4_unicode_ci,
  `case_fund_bottom_button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_fund_bottom_button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_bottom_notification` longtext COLLATE utf8mb4_unicode_ci,
  `page_bottom_detail_content` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types_of_funding_page_settings`
--

INSERT INTO `types_of_funding_page_settings` (`id`, `title`, `background_image`, `background_forecolor`, `page_detail`, `case_fund_heading`, `case_fund_detail`, `case_fund_bottom_button_text`, `case_fund_bottom_button_url`, `page_bottom_notification`, `page_bottom_detail_content`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Types of funding', 'advantage-lending.com_1589314172.jpeg', '#133d8d', 'There are several types of lawsuit funding for those stuck in lengthy legal proceedings. Oasis can help connect you to the right solution for your situation.', 'Cases We Fund', 'Personal injury cases can take time to settle. Oasis provides financial assistance while your attorney sees your case through to the end. Our experienced team works to get you fast and fair pre-settlement funding for a wide variety of legal cases.', 'Apply Now <i class=\"fa fa-file-text-o\"></i>', '#appointment', 'Don’t see your situation? <strong class=\"text-underline\">Call today at <a  style=\"color: #fff !important;\" href=\"tel:877-333-6680\">(877) 333-6680</a></strong> to confirm if Oasis can provide assistance.', 'Oasis does not directly fund structured settlement or inheritance funding cases, but we can refer you to trusted partners who can evaluate your case and provide funding if approved.\r\n\r\nOasis is currently not providing legal funding in Arkansas, Kansas, Kentucky, Maryland,  Nevada, North Carolina or West Virginia.\r\n\r\nOasis provides funding for Workers’ Compensations cases in Connecticut, Florida, Georgia, Illinois, Indiana, Louisiana, Missouri, New Mexico, Ohio, Oklahoma, and South Carolina, only.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 14:09:32', '2020-05-12 14:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_funding_pre_settlements`
--

CREATE TABLE `types_of_funding_pre_settlements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `icon_image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_one_heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_two_heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_three_heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types_of_funding_pre_settlements`
--

INSERT INTO `types_of_funding_pre_settlements` (`id`, `title`, `detail`, `icon_image_one`, `icon_one_heading`, `icon_image_two`, `icon_two_heading`, `icon_image_three`, `icon_three_heading`, `button_text`, `button_url`, `background_forecolor`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pre-settlement Funding', 'While a case is in progress, a cash advance payment may be needed for various expenses. Pre-settlement funding offers you a portion of your settlement upfront, allowing faster relief from overdue bills and financial worries. Also known as a lawsuit advance or settlement loan, this money is taken from what a plaintiff is estimated to receive once their case is finalized.\r\n\r\nPre-settlement funding is a good option for you if:', 'advantage-lending.com_1589322733.svg', 'You have been victim to an accident that’s not your fault', 'advantage-lending.com_1589322741.svg', 'Your case is taking a long time to settle', 'advantage-lending.com_1589322720.svg', 'You are struggling with debt due to living and medical expenses', 'Apply Now', '#appointment', '#d9edf7', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 16:32:00', '2020-05-12 18:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_fund_cases_we_fund_types`
--

CREATE TABLE `types_of_fund_cases_we_fund_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types_of_fund_cases_we_fund_types`
--

INSERT INTO `types_of_fund_cases_we_fund_types` (`id`, `title`, `detail`, `button_text`, `button_url`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Cases We Fund', 'Personal injury cases can take time to settle. Oasis provides financial assistance while your attorney sees your case through to the end. Our experienced team works to get you fast and fair pre-settlement funding for a wide variety of legal cases.', 'Apply Now', '#appointment', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 17:16:06', '2020-05-12 18:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_fund_pages`
--

CREATE TABLE `type_of_fund_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_forecolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_top_short_detail` longtext COLLATE utf8mb4_unicode_ci,
  `page_bottom_notification` mediumtext COLLATE utf8mb4_unicode_ci,
  `page_bottom_detail` longtext COLLATE utf8mb4_unicode_ci,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_fund_pages`
--

INSERT INTO `type_of_fund_pages` (`id`, `title`, `background_image`, `background_forecolor`, `page_top_short_detail`, `page_bottom_notification`, `page_bottom_detail`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Types of funding', 'advantage-lending.com_1589316210.jpeg', '#133d8d', 'There are several types of lawsuit funding for those stuck in lengthy legal proceedings. Oasis can help connect you to the right solution for your situation.', 'Don’t see your situation? <strong class=\"text-underline\">Call today at <a  style=\"color: #fff !important;\" href=\"tel:877-333-6680\">(877) 333-6680</a></strong> to confirm if Oasis can provide assistance.', 'Oasis does not directly fund structured settlement or inheritance funding cases, but we can refer you to trusted partners who can evaluate your case and provide funding if approved.\r\n\r\nOasis is currently not providing legal funding in Arkansas, Kansas, Kentucky, Maryland,  Nevada, North Carolina or West Virginia.\r\n\r\nOasis provides funding for Workers’ Compensations cases in Connecticut, Florida, Georgia, Illinois, Indiana, Louisiana, Missouri, New Mexico, Ohio, Oklahoma, and South Carolina, only.', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 14:43:30', '2020-05-12 14:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `usa_states`
--

CREATE TABLE `usa_states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usa_states`
--

INSERT INTO `usa_states` (`id`, `name`, `state_code`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Alaska', 'AK', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Alabama', 'AL', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Arkansas', 'AR', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Arizona', 'AZ', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'California', 'CA', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Colorado', 'CO', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Connecticut', 'CT', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'District of Columbia', 'DC', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Delaware', 'DE', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Florida', 'FL', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Georgia', 'GA', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Hawaii', 'HI', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Iowa', 'IA', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Idaho', 'ID', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Illinois', 'IL', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Indiana', 'IN', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Kansas', 'KS', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Kentucky', 'KY', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Louisiana', 'LA', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Massachusetts', 'MA', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Maryland', 'MD', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Maine', 'ME', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Michigan', 'MI', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Minnesota', 'MN', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Missouri', 'MO', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Mississippi', 'MS', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Montana', 'MT', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'North Carolina', 'NC', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'North Dakota', 'ND', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Nebraska', 'NE', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'New Hampshire', 'NH', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'New Jersey', 'NJ', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'New Mexico', 'NM', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Nevada', 'NV', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'New York', 'NY', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Ohio', 'OH', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Oklahoma', 'OK', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Oregon', 'OR', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Pennsylvania', 'PA', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Rhode Island', 'RI', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'South Carolina', 'SC', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'South Dakota', 'SD', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Tennessee', 'TN', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Texas', 'TX', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Utah', 'UT', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Virginia', 'VA', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Vermont', 'VT', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Washington', 'WA', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Wisconsin', 'WI', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'West Virginia', 'WV', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Wyoming', 'WY', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'JUSTIN DABISH', 'justindabish@aol.com', '$2y$10$PJtDCD0iSvdUsNoSUrrT9OCKLxWVyFVLKvps57Bi9b/yRofyogc2K', 'Lq5iBkEfSvxmPOUWBpaUg5w5UBclrqkX4FvxIFOF7u6R3WbRdO15ty5QPOf4', '2020-05-09 10:10:19', '2020-05-09 10:10:19'),
(2, 'Fahad Bhuyian', 'f.bhuyian@gmail.com', '$2y$10$mkObiNYK8syRW/Bk9Xt0WOq/MCfCO1sjNdSjgGeH0NnO1mhrKCdAK', 'QJJNYvaj6Z9ZgFvBp4bwfcGlfZ21CekuAEViuEXBVQOkAcfqTQKVM6AwqVTk', '2020-05-09 10:10:44', '2020-05-09 10:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `you_are_not_alones`
--

CREATE TABLE `you_are_not_alones` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `section_button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_first_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_second_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `you_are_not_alones`
--

INSERT INTO `you_are_not_alones` (`id`, `title`, `detail`, `section_button_text`, `section_button_url`, `background_first_color`, `background_second_color`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'YOU ARE NOT ALONE', 'Last month we helped more than 3,000 people just like you, providing funding during trying times. Our lawsuit settlement funding helps put you back in command of your finances, your responsibilities, and your life.', 'Learn How It Works <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>', 'how-it-works', '#2f344e', '#262a40', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 06:05:14', '2020-05-12 06:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `you_are_not_alone_videos`
--

CREATE TABLE `you_are_not_alone_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `video_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_from_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `play_video_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `you_are_not_alone_videos`
--

INSERT INTO `you_are_not_alone_videos` (`id`, `video_by`, `video_from_location`, `short_detail`, `video_image`, `play_video_text`, `youtube_video_link`, `module_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Joyce', 'Palm Bay, FL', '“I wasn’t receiving any money at all, not even from the insurance company, and Oasis came through… They’re just fantastic!”', 'advantage-lending.com_1589286186.jpg', 'Play Video', 'https://www.youtube.com/watch?v=NsP9kLDy-Qg', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 06:21:29', '2020-05-12 06:23:06'),
(2, 'Koyce', 'Palm Bay, AL', '“I wasn’t receiving any money at all, not even from the insurance company, and Oasis came through… They’re just fantastic!”', 'advantage-lending.com_1589286164.png', 'Play Video', 'https://www.youtube.com/watch?v=NsP9kLDy-Qg', 'Active', NULL, NULL, NULL, NULL, '2020-05-12 06:22:44', '2020-05-12 06:22:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_medias`
--
ALTER TABLE `about_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_media_settings`
--
ALTER TABLE `about_media_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_meet_our_teams`
--
ALTER TABLE `about_meet_our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_meet_our_team_members`
--
ALTER TABLE `about_meet_our_team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_milestoneses`
--
ALTER TABLE `about_milestoneses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_page_settings`
--
ALTER TABLE `about_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_work_at_advantage_lendings`
--
ALTER TABLE `about_work_at_advantage_lendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_forms`
--
ALTER TABLE `application_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attorneys_forms`
--
ALTER TABLE `attorneys_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `better_days_starts`
--
ALTER TABLE `better_days_starts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_page_settings`
--
ALTER TABLE `career_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_posts`
--
ALTER TABLE `career_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_types`
--
ALTER TABLE `case_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_me_abouts`
--
ALTER TABLE `contact_me_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_requests`
--
ALTER TABLE `contact_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_contents`
--
ALTER TABLE `faq_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_page_settings`
--
ALTER TABLE `faq_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_atterney_portal_simplifies`
--
ALTER TABLE `for_atterney_portal_simplifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_attorney_known_and_recognizeds`
--
ALTER TABLE `for_attorney_known_and_recognizeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_attorney_page_settings`
--
ALTER TABLE `for_attorney_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_attorney_product_and_services`
--
ALTER TABLE `for_attorney_product_and_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_attorney_settlement_funding_processes`
--
ALTER TABLE `for_attorney_settlement_funding_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_broker_page_settings`
--
ALTER TABLE `for_broker_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funding_forms`
--
ALTER TABLE `funding_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funding_need_page_contents`
--
ALTER TABLE `funding_need_page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funding_you_needs`
--
ALTER TABLE `funding_you_needs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glossaries`
--
ALTER TABLE `glossaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glossary_section_contents`
--
ALTER TABLE `glossary_section_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hear_abouts`
--
ALTER TABLE `hear_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_on_many_cases`
--
ALTER TABLE `help_on_many_cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_on_many_case_typeses`
--
ALTER TABLE `help_on_many_case_typeses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_works_do_not_settle_for_lesses`
--
ALTER TABLE `how_it_works_do_not_settle_for_lesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_works_do_not_settle_steps`
--
ALTER TABLE `how_it_works_do_not_settle_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_works_page_settings`
--
ALTER TABLE `how_it_works_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_work_cases_we_funds`
--
ALTER TABLE `how_it_work_cases_we_funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_work_securing_the_moneies`
--
ALTER TABLE `how_it_work_securing_the_moneies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_we_helps`
--
ALTER TABLE `how_we_helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inheritance_funding_forms`
--
ALTER TABLE `inheritance_funding_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meet_leader_settings`
--
ALTER TABLE `meet_leader_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `need_an_attorneies`
--
ALTER TABLE `need_an_attorneies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `never_settle_for_lesses`
--
ALTER TABLE `never_settle_for_lesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_names`
--
ALTER TABLE `page_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `privacy_policy_pages`
--
ALTER TABLE `privacy_policy_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_contents`
--
ALTER TABLE `resource_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_content_infos`
--
ALTER TABLE `resource_content_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_page_settings`
--
ALTER TABLE `resource_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_specific_licenseses`
--
ALTER TABLE `state_specific_licenseses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structured_settlement_application_forms`
--
ALTER TABLE `structured_settlement_application_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_of_uses`
--
ALTER TABLE `terms_of_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types_of_funding_page_settings`
--
ALTER TABLE `types_of_funding_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types_of_funding_pre_settlements`
--
ALTER TABLE `types_of_funding_pre_settlements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types_of_fund_cases_we_fund_types`
--
ALTER TABLE `types_of_fund_cases_we_fund_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_fund_pages`
--
ALTER TABLE `type_of_fund_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usa_states`
--
ALTER TABLE `usa_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `you_are_not_alones`
--
ALTER TABLE `you_are_not_alones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `you_are_not_alone_videos`
--
ALTER TABLE `you_are_not_alone_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_medias`
--
ALTER TABLE `about_medias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `about_media_settings`
--
ALTER TABLE `about_media_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_meet_our_teams`
--
ALTER TABLE `about_meet_our_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_meet_our_team_members`
--
ALTER TABLE `about_meet_our_team_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `about_milestoneses`
--
ALTER TABLE `about_milestoneses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_page_settings`
--
ALTER TABLE `about_page_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_work_at_advantage_lendings`
--
ALTER TABLE `about_work_at_advantage_lendings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;
--
-- AUTO_INCREMENT for table `application_forms`
--
ALTER TABLE `application_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `attorneys_forms`
--
ALTER TABLE `attorneys_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `better_days_starts`
--
ALTER TABLE `better_days_starts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `career_page_settings`
--
ALTER TABLE `career_page_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `career_posts`
--
ALTER TABLE `career_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `case_types`
--
ALTER TABLE `case_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_me_abouts`
--
ALTER TABLE `contact_me_abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact_requests`
--
ALTER TABLE `contact_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `faq_contents`
--
ALTER TABLE `faq_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `faq_page_settings`
--
ALTER TABLE `faq_page_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `for_atterney_portal_simplifies`
--
ALTER TABLE `for_atterney_portal_simplifies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `for_attorney_known_and_recognizeds`
--
ALTER TABLE `for_attorney_known_and_recognizeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `for_attorney_page_settings`
--
ALTER TABLE `for_attorney_page_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `for_attorney_product_and_services`
--
ALTER TABLE `for_attorney_product_and_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `for_attorney_settlement_funding_processes`
--
ALTER TABLE `for_attorney_settlement_funding_processes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `for_broker_page_settings`
--
ALTER TABLE `for_broker_page_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `funding_forms`
--
ALTER TABLE `funding_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `funding_need_page_contents`
--
ALTER TABLE `funding_need_page_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `funding_you_needs`
--
ALTER TABLE `funding_you_needs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `glossaries`
--
ALTER TABLE `glossaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `glossary_section_contents`
--
ALTER TABLE `glossary_section_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hear_abouts`
--
ALTER TABLE `hear_abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `help_on_many_cases`
--
ALTER TABLE `help_on_many_cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `help_on_many_case_typeses`
--
ALTER TABLE `help_on_many_case_typeses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `how_it_works_do_not_settle_for_lesses`
--
ALTER TABLE `how_it_works_do_not_settle_for_lesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `how_it_works_do_not_settle_steps`
--
ALTER TABLE `how_it_works_do_not_settle_steps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `how_it_works_page_settings`
--
ALTER TABLE `how_it_works_page_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `how_it_work_cases_we_funds`
--
ALTER TABLE `how_it_work_cases_we_funds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `how_it_work_securing_the_moneies`
--
ALTER TABLE `how_it_work_securing_the_moneies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `how_we_helps`
--
ALTER TABLE `how_we_helps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inheritance_funding_forms`
--
ALTER TABLE `inheritance_funding_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meet_leader_settings`
--
ALTER TABLE `meet_leader_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `need_an_attorneies`
--
ALTER TABLE `need_an_attorneies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `never_settle_for_lesses`
--
ALTER TABLE `never_settle_for_lesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page_names`
--
ALTER TABLE `page_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `privacy_policy_pages`
--
ALTER TABLE `privacy_policy_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resource_contents`
--
ALTER TABLE `resource_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `resource_content_infos`
--
ALTER TABLE `resource_content_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resource_page_settings`
--
ALTER TABLE `resource_page_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `state_specific_licenseses`
--
ALTER TABLE `state_specific_licenseses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `structured_settlement_application_forms`
--
ALTER TABLE `structured_settlement_application_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `terms_of_uses`
--
ALTER TABLE `terms_of_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `types_of_funding_page_settings`
--
ALTER TABLE `types_of_funding_page_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `types_of_funding_pre_settlements`
--
ALTER TABLE `types_of_funding_pre_settlements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `types_of_fund_cases_we_fund_types`
--
ALTER TABLE `types_of_fund_cases_we_fund_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `type_of_fund_pages`
--
ALTER TABLE `type_of_fund_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usa_states`
--
ALTER TABLE `usa_states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `you_are_not_alones`
--
ALTER TABLE `you_are_not_alones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `you_are_not_alone_videos`
--
ALTER TABLE `you_are_not_alone_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
