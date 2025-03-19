-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 03:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$uTnTJLOT4Xps.oMSdegmoePkFelTclY4CCuETOSDLNrVFHN95yIhO'),
(2, 'admin', '$2y$10$WO8KEHxzOLzVU/Cj0s2lIOuJ7LIu5qmPJKra4p3XhISqhx259RdW6'),
(3, 'admin', '$2y$10$Y6tz6eCNu6hCgkB94nOiy.w.eSOQ/XTg/SRsbcIwtcM8r8fBYcfwC'),
(4, 'admin', '$2y$10$w3Cb4Zel6/o7V4GJMiy9/eFX9DspXFoswgHwLRUbZwKZJkM7njv.q'),
(5, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `upload_type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `publication_year` int(11) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `edu_level` varchar(50) DEFAULT NULL,
  `book_cover` varchar(255) DEFAULT NULL,
  `full_book` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `upload_type`, `title`, `author`, `publication_year`, `city`, `state`, `description`, `genre`, `status`, `edu_level`, `book_cover`, `full_book`) VALUES
(6, 'book', 'The Fault in Our Stars', 'John Green', 10, 'Baltimore', 'United Stated', 'Hazel Grace Lancaster, a 16-year-old with thyroid cancer that has spread to her lungs, attends a cancer patient support group at her mother\'s behest. At one meeting, Hazel meets a 17-year-old boy currently in remission named Augustus Waters, whose osteosarcoma caused him to lose his right leg. Augustus is at the meeting to support Isaac, his friend who has eye cancer. Hazel and Augustus strike a bond immediately and agree to read each other\'s favorite novels. Augustus gives Hazel The Price of Dawn, and Hazel recommends An Imperial Affliction, a novel about a cancer-stricken girl named Anna that parallels Hazel\'s own experience. After Augustus finishes reading her book, he is frustrated upon learning that the novel ends abruptly without a conclusion, as if Anna had died suddenly. Hazel explains the novel\'s author, Peter van Houten, retreated to Amsterdam following the novel\'s publication and has not been heard from since.\r\n\r\nA week later, Augustus reveals to Hazel that he has tracked down Van Houten\'s assistant, Lidewij, and, through her, has managed to start an e-mail correspondence with Van Houten. The two write to Van Houten with questions regarding the novel\'s ending; he eventually replies, explaining that he can only answer Hazel\'s questions in person. At a picnic, Augustus surprises Hazel with tickets to Amsterdam to meet Van Houten, acquired through the story\'s version of the Make-A-Wish Foundation, \"The Genie Foundation\".\r\n\r\nUpon meeting Van Houten, Hazel and Augustus are shocked to discover that he is a mean-spirited alcoholic. Horrified by Van Houten\'s hostile behavior towards the teenagers, Lidewij confesses to having arranged the meeting on his behalf. Lidewij resigns as Van Houten\'s assistant and takes Hazel and Augustus to the Anne Frank House, where Augustus and Hazel share their first kiss. Later that night Hazel and Augustus partly lose their virginity to one another in Augustus\'s hotel room, confessing their mutual love for each other.\r\n\r\nThe next day, Augustus reveals that his cancer has returned. Upon their return to Indianapolis, Augustus\'s health continues to deteriorate, resulting in him staying in the ICU for a few days. Fearing his death, Augustus invites Isaac and Hazel to his pre-funeral, where they give eulogies. Augustus dies soon after, leaving Hazel heartbroken. Van Houten shows up at Augustus\'s funeral to apologize to Hazel.\r\n\r\nHazel learns that Augustus had written an obituary for her, and reads it after Lidewij discovers it amidst Van Houten\'s letters. It states that getting hurt in this world is unavoidable, but we do get to choose whom we allow to hurt us, and that he is happy with his choice, and hopes she likes hers too. The book closes with Hazel stating that she is happy with her choice.', '[\"Fiction\"]', 'Free', 'Higher Education', './uploads/the_fault_in.jpeg', './uploads/00_OOVP_IS.pdf'),
(12, 'book', ' Echoes of Tomorrow', 'Aria M. Thompson', 2023, 'Seattle', ' Washington', 'Echoes of Tomorrow is a riveting science fiction novel that explores the consequences of time travel in a future society plagued by technological disparities and moral dilemmas. The story follows Elara, a young scientist, who discovers a way to send messages to the past. As she navigates the complexities of altering timelines, Elara must decide whether changing her past is worth risking the future.', '[\"Fiction\"]', 'Free', 'Higher Education', './uploads/echoesoftomorrow.jpg', './uploads/Echo of Tomorrow Book One (Buckman Rob) .pdf'),
(13, 'book', 'Night Shift', 'Annie Crown', 2023, 'New York', 'United State', 'Kendall Holiday spends her Friday nights exactly where she wants to with her head buried in a spicy romance novel while she works the graveyard shift at her university\'s library. She knows she could join her friends for a weekend of drunken debauchery and college parties, but she likes her alone time, so she tells herself she isn\'t hiding when she gets lost in the pages of fictional love stories.\r\n\r\nBut that all changes when Vincent Knight, captain of the basketball team, turns up with an injured wrist, a sour mood, and a pressing need for poetry recommendations for a class he hates. Vincent is tall, smart-mouthed, and challenges Kendall like no one has before. Suddenly, she\'s falling headfirst into her very own romance novel—but it takes a lot more truth than tropes to get to a happy ever after in real life.', '[\"Fiction\"]', 'Free', 'Elementary', './uploads/Night shift.jpg', './uploads/Night Shift (Annie Crown) (Z-Library).pdf.crdownload'),
(14, 'book', 'Self Discipline Mindset', 'Curtis Leone', 2016, 'New York', 'United', 'This book has actionable information that will help you to supercharge your self-discipline to achieve great feats in life. We all set many goals in life and hope that we will achieve them. Unfortunately, many of us don\'t have the discipline to follow what it takes to transform these goals to reality. We somehow lose our passion and drive to do what needs to be done after setting goals. Think about it; every year, we all set New Year\'s resolutions with the hope that by the end of the calendar year, we would have changed different aspects of our lives. We start off overly excited that by the end of the year, our life would be completely different. However, that doesn\'t happen for many of us because we lose our focus and passion for whatever it is that we want to achieve. As you well know, you cannot go far in life if you cannot implement everything needed to transform your goals into reality. You cannot chase your dreams and actualize your goals if you are not determined, strong willed, and have the power to control emotions, desires, and feelings that derail your goals and their achievement. To achieve success, you must boss your thoughts and emotions as well as exercise perseverance and endurance, which are extremely important self-discipline ingredients. Cultivating these character traits may sound challenging right now, but by the time you reach the last page of this book, self-discipline will come easy to you; you will find no difficulty in exercising self-discipline, and going after everything you desire. This book is the ultimate self-discipline master guide: it aims to teach you how to develop the self-discipline you require to pursue your goals, while avoiding distractions that tend to derail your goal pursuit. Make the best use of this wonderful opportunity and learn how to unlock your self-discipline right now.', '[\"Education\", \"Biography\", \"Social\", \"Motivation\"]', 'Free', 'Higher Education', './uploads/Self Discipline Mindset.jpg', './uploads/Self Discipline Why Self Discipline Is Lacking In Most And How To Unleash It Now (Habits, Willpower, Confidence, Emotional... (Leone, Curtis) (Z-Library).pdf.crdownload'),
(15, 'book', 'Cruel Kings and Mean Queens', 'Terry Deary, Kate Sheppard', 2011, 'Manchester', 'London', 'The history book which shows you monarchs as they really were - mad, menacing and murderous! Find out which king died after falling off the toilet, why people thought King John was a werewolf, and why Queen Anne\'s feet were covered in garlic. Packed with treacherous treason, evil executions and savage struggles for the throne, this is royal history with the nasty bits left in!', '[\"Non-Fiction\"]', 'Free', 'Elementary', './uploads/Cruel Kings and Mean Queens.jpg', './uploads/Horrible Histories Special Cruel Kings and Mean Queens (Terry Deary, Kate Sheppard) (Z-Library).pdf.crdownload'),
(16, 'book', 'If He Had Been with Me', 'Laura Nowlin', 2013, 'Lander', 'German', 'A heartbreaking and raw story of love, regret, and the life-altering impact of the relationships we hold closest to us, perfect for fans of Colleen Hoover.\r\n   \r\nIf he had been with me, everything would have been different…Autumn and Finn used to be inseparable. But then something changed. Or they changed. Now, they do their best to ignore each other.Autumn has her boyfriend Jamie, and her close-knit group of friends. And Finn has become that boy at school, the one everyone wants to be around.\r\n   \r\nThat still doesn\'t stop the way Autumn feels every time she and Finn cross paths, and the growing, nagging thought that maybe things could have been different. Maybe they should be together.But come August, things will change forever. And as time passes, Autumn will be forced to confront how else life might have been different if they had never parted', '[\"Fiction\"]', 'Free', 'Higher Education', './uploads/If He Had Been with Me.jpg', './uploads/If He Had Been with Me (Laura Nowlin) (Z-Library).pdf.crdownload'),
(17, 'book', 'Trotsky: A Biography', 'Robert Service', 2009, 'Canada', 'America', 'Trotsky is perhaps the most intriguing and, given his prominence, the most understudied of the Soviet revolutionaries. Using new archival sources including family letters, party and military correspondence, confidential speeches, and medical records, Service offers new insights into Trotsky. He discusses Trotsky’s fractious relations with the leaders he was trying to bring into a unified party before 1914; his attempt to disguise his political closeness to Stalin; and his role in the early 1920s as the progenitor of political and cultural Stalinism. Trotsky evinced a surprisingly glacial and schematic approach to making revolution. Service recounts Trotsky’s role in the botched German revolution of 1923; his willingness to subject Europe to a Red Army invasion in the 1920s; and his assumption that peasants could easily be pushed onto collective farms. Service also sheds light on Trotsky’s character and personality: his difficulties with his Jewish background, the development of his oratorical skills and his preference for writing over politicking, his inept handling of political factions and coldness toward associates, and his aversion to assuming personal power.\r\n\r\nAlthough Trotsky’s followers clung to the stubborn view of him as a pure revolutionary and a powerful intellect unjustly hounded into exile by Stalin, the reality is very different. This illuminating portrait of the man and his legacy sets the record straight.\r\n\r\n', '[\"Education\",\"Biography\"]', 'Free', 'Higher Education', './uploads/Trotsky.jpg', './uploads/Trotsky A Biography (Robert Service) (Z-Library).pdf.crdownload'),
(18, 'book', 'Pharmacodynamic Basis of Herbal Medicine', 'Manuchair Ebadi', 2006, 'Berlin', 'German', 'Continuing in the tradition of the acclaimed first edition, Pharmacodynamic Basis of Herbal Medicine, Second Edition examines in extensive detail the physiologic effects of complimentary and alternative therapies, foods, supplements, vitamins, and traditional herbal remedies. The author considers the site, mode, and mechanism of action to explain the desired and adverse effects and interactions of each herb, drug, and food in an encyclopedic volume. Today’s Questions\r\nDevoting entire chapters to the most influential herbal remedies, the text either endorses or debunks popular conceptions with pure scientific data. The author provides answers to today’s naturopathic questions by paying particular attention to the chronic diseases engendered by obesity, as well as Alzheimer’s, cancer, imbalances of neurotransmitters such as Parkinson’s, and depression. The Latest Research\r\n\r\nIncorporating current research on the devastating role of chronic systemic inflammation and the cumulative effect of poor oxygen metabolism and free radicals on changes in mitochondrial DNA, enzyme activity, and accelerations in the aging process, the text bridges the gap between ancient remedies and modern knowledge. Effective Treatment\r\n\r\nDeconstructing the molecular mystery that is the interaction among herbal properties, physiology, and disease, Pharmacodynamic Basis of Herbal Medicine, Second Edition opens the door to successful herbal treatment.', '[\"Medicine and Health\"]', 'Free', 'Higher Education', './uploads/Pharmacodynamic Basis of Herbal Medicine.jpg', './uploads/Pharmacodynamic Basis of Herbal Medicine, Second Edition (Manuchair Ebadi) (Z-Library).pdf.crdownload'),
(19, 'book', 'Pharmacodynamic Basis of Herbal Medicine', 'Manuchair Ebadi', 2006, 'Berlin', 'German', 'Continuing in the tradition of the acclaimed first edition, Pharmacodynamic Basis of Herbal Medicine, Second Edition examines in extensive detail the physiologic effects of complimentary and alternative therapies, foods, supplements, vitamins, and traditional herbal remedies. The author considers the site, mode, and mechanism of action to explain the desired and adverse effects and interactions of each herb, drug, and food in an encyclopedic volume. Today’s Questions\r\nDevoting entire chapters to the most influential herbal remedies, the text either endorses or debunks popular conceptions with pure scientific data. The author provides answers to today’s naturopathic questions by paying particular attention to the chronic diseases engendered by obesity, as well as Alzheimer’s, cancer, imbalances of neurotransmitters such as Parkinson’s, and depression. The Latest Research\r\n\r\nIncorporating current research on the devastating role of chronic systemic inflammation and the cumulative effect of poor oxygen metabolism and free radicals on changes in mitochondrial DNA, enzyme activity, and accelerations in the aging process, the text bridges the gap between ancient remedies and modern knowledge. Effective Treatment\r\n\r\nDeconstructing the molecular mystery that is the interaction among herbal properties, physiology, and disease, Pharmacodynamic Basis of Herbal Medicine, Second Edition opens the door to successful herbal treatment.', '[\"Medicine and Health\"]', 'Free', 'Higher Education', './uploads/Pharmacodynamic Basis of Herbal Medicine.jpg', './uploads/Pharmacodynamic Basis of Herbal Medicine, Second Edition (Manuchair Ebadi) (Z-Library).pdf.crdownload'),
(22, '', 'I Am the Hero of My Own Life: A Guided Journal', 'Brianna Wiest', 2018, 'New York', 'USA', 'This journal will help you envision your ideal life and then identify the unconscious attachments that are preventing you from living it. \r\n\r\nThrough a series of writing prompts and exercises as well as some of Brianna\'s favorite quotes, most popular articles, and new passages, it will help you sort through the conflicting thoughts, feelings, and fears that are preventing you from becoming the person you want and need to be. \r\n\r\nYou do not need more motivation or drive to start building the life of your dreams. You need to better understand who you are, why you keep re-creating comfortable pain patterns, and why you may not really want what is it you think you do. ', '[\"Education\",\"Economy\"]', 'Free', 'Higher Education', './uploads/I Am the Hero of My Own Life.jpg', './uploads/I Am the Hero of my Own Life (Brianna Wiest) (Z-Library).pdf'),
(23, 'journal', 'I Am the Hero of My Own Life: A Guided Journal', 'Brianna Wiest', 2018, 'New York', 'USA', 'This journal will help you envision your ideal life and then identify the unconscious attachments that are preventing you from living it. \r\n\r\nThrough a series of writing prompts and exercises as well as some of Brianna\'s favorite quotes, most popular articles, and new passages, it will help you sort through the conflicting thoughts, feelings, and fears that are preventing you from becoming the person you want and need to be. \r\n\r\nYou do not need more motivation or drive to start building the life of your dreams. You need to better understand who you are, why you keep re-creating comfortable pain patterns, and why you may not really want what is it you think you do. \r\n\r\nSample exercises include:\r\n\r\n - Tracing your judgments of other people back to your own personal insecurities.\r\n\r\n - Drafting a Venn diagram of your skills, your passions, and the world\'s needs.\r\n\r\n - Outlining exactly the type of partner you always dreamed of marrying, then strategizing how you\'re going to embody those traits yourself.\r\n\r\n - Envisioning what you\'d think about and what you\'d do all day if you were already healed, whole and happy.', '[\"Non-Fiction\",\"Education\",\"Economy\"]', 'Free', 'Higher Education', './uploads/I Am the Hero of My Own Life.jpg', './uploads/I Am the Hero of my Own Life (Brianna Wiest) (Z-Library).pdf'),
(24, 'journal', 'Creative Journal Writing', 'Stephanie Dowrick', 2009, 'London', 'UK', 'Winner of the COVR Award for Book of the Year (2007) From the #1 creativity publisher in the country comes our latest creativity bestseller—Creative Journal Writing—the ultimate book for those who are looking to use this powerful tool to heal, expand, and transform their lives. In this exceptionally positive and encouraging book, Stephanie Dowrick frees the journal writer she believes is in virtually everyone, showing through stories and examples that a genuine sense of possibility can be revived on every page. Creative journal writing goes way beyond just recording events on paper. It can be the companion that supports but doesn?t judge, a place of unparalleled discovery, and a creative playground where the everyday rules no longer count. Proven benefits of journal writing include reduced stress and anxiety, increased self-awareness, sharpened mental skills, genuine psychological insight, creative inspiration and motivation, strengthened ability to cope during difficult times, and overall physical and emotional well-being. Combining a rich choice of ideas with wonderful stories, quotes, and her refreshingly intimate thoughts gained through a lifetime of writing, Dowrick?s insights and confidence make journal writing irresistible?and your own life more enchanting. Included in Creative Journal Writing are: u stories of how people have used journal writing to transform their lives; · inspirational instructions, guidelines, and quotes; · key principles, practical suggestions, and helpful hints; · 125 starter topics, designed to help even the most reluctant journal writer; · more than forty powerful exercises; · and much more!', '[\"Education\"]', 'Free', 'Higher Education', './uploads/Creative Journal Writing.jpg', './uploads/Creative Journal Writing (Dowrick Stephanie) (Z-Library).pdf'),
(25, 'journal', '365 Journal Writing Ideas', 'Rossi Fox', 2013, 'Canada', 'USA', 'Follow the undated daily journal writing prompts & weekly actions in this book to fill your journal to the point of bursting. Filled with memories, self-reflection, ideas, inspiration, creativity, experiences, achievements, gratitude, short stories, photographs, goals and direction. Unlock the potential of your journal and enjoy some time for yourself.\r\nInside you will find:\r\nJOURNAL WRITING TIPS & TRICKS.\r\nLearn how to beat the blank page to start your journal writing practice, how to make the time to write, how to organize your journal/diary, find ideas on how to add visual interest to your journal, a collection of alternative journal prompts, a photography challenge checklist and more.\r\n365 JOURNALING PROMPTS & QUESTIONS.\r\nEnjoy a years-long guided journal writing course for self exploration through daily writing prompts. To help you use your journal/diary as a place to remember where you have been (memoir), appreciate where you are now (gratitude) and decide on where you are going (goals). Not only helping you gain clarity, closure and purpose but also resulting in your very own mini memoir or life journal keepsake.\r\nMixed in amongst the reflective journal writing questions are creative writing prompts, light hearted questions and short story writing idea generator tables to help get your creative writing juices flowing and to have some fun with your journal.\r\n52 WEEKLY ACTIONS.\r\nFeel like you are stuck in a bit of a rut? Looking to boost your self confidence by expanding your comfort zone? Or do you want some new experiences to write about? Along with your trusty journal, complete one action each week over the 365 days to make the next 52 weeks of your life just that little bit more interesting', '[\"Non-Fiction\",\"Education\"]', 'Premium', 'Higher', './uploads/365 Journal Writing Ideas.jpg', './uploads/365 Journal Writing Ideas A year of daily journal writing prompts, questions  actions to fill your journal with memories,... (Fox, Rossi) (Z-Library).pdf'),
(26, 'journal', 'A Journal of the Plague Year (Oxford World\'s Classics)', 'Defoe Daniel, Landa Louis, Roberts David', 2010, 'Canada', 'USA', 'Actually written sixty years after the plague of 1665 swept through London, Defoe brings the city to life in all of its hardship and fear. With a wealth of detail, \"A Journal of the Plague Year\" seems almost a firsthand account, taking readers through the neighborhoods, houses, and streets that have drastically changed with the rising death toll. The bustle of business and errands gives way to doors marked with the cross to signify a house of death, as well as the dead-carts transporting those struck down to the mass graves as the dead rise in number to nearly 100,000. As the epidemic progresses and the narrator encounters more stories of isolation and horror, Defoe reveals his masterful balance as both a historical and imaginative writer.', '[\"Non-Fiction\",\"Education\",\"Biography\"]', 'Free', 'Higher Education', './uploads/A Journal of the Plague Year.jpg', './uploads/A Journal of the Plague Year. (Defoe, Daniel Roberts, David Landa, Louis) (Z-Library).pdf'),
(27, 'journal', 'The Journal of Henry David Thoreau', 'Henry David Thoreau, edited by Damion Searls, preface by John Stilgoe', 2009, 'Philadelphia', 'USA', 'Henry David Thoreau’s Journal was his life’s work: the daily practice of writing that accompanied his daily walks, the workshop where he developed his books and essays, and a project in its own right—one of the most intensive explorations ever made of the everyday environment, the revolving seasons, and the changing self. It is a treasure trove of some of the finest prose in English and, for those acquainted with it, its prismatic pages exercise a hypnotic fascination. Yet at roughly seven thousand pages, or two million words, it remains Thoreau’s least-known work.\r\nThis reader’s edition, the largest one-volume edition of Thoreau’s Journal ever published, is the first to capture the scope, rhythms, and variety of the work as a whole. Ranging freely over the world at large, the Journal is no less devoted to the life within. As Thoreau says, “It is in vain to write on the seasons unless you have the seasons in you.”', '[\"Non-Fiction\",\"Education\",\"Biography\"]', 'Free', 'Secondary', './uploads/The Journal of Henry David Thoreau.jpg', './uploads/The Journal of Henry David Thoreau, 1837-1861 (Henry David Thoreau, edited by Damion Searls etc.) (Z-Library).pdf'),
(28, 'journal', 'How to Journal: The 10 Minute Habit that will Transform your Life', 'Catharine Bramkamp', 2020, 'Sydney', 'Australia', 'Journal for ten minutes a day, every day, and soon you’ll be healthier, happier, and more focused. This book will help you transform your life.\r\nTransformative journaling is a way to organically organize your thoughts and experiences in a positive, more forward thinking direction. \r\n\r\nDaily journaling will not only help you become the hero(ine) of your story, but studies of brain plasticity have discovered consistent journaling can reduce doctor visits and improve overall health.\r\nThis book is about transforming your life, ten minutes a day.', '[\"Education\"]', 'Free', 'Higher Education', './uploads/How to Journal.jpg', './uploads/How to Journal The 10 Minute Habit that will Transform your Life (Catharine Bramkamp) (Z-Library).pdf'),
(29, 'journal', 'The Unabridged Journals of Sylvia Plath', 'Karen V. Kukil, Sylvia Plath', 2007, ' London', 'UK', 'Published in Their Entirety for the First Time, Sylvia Plath\'s journals provide an intimate portrait of the writer who was to produce in the last seven months of her life some of the most extraordinary poems of the twentieth century. Faithfully transcribed from the twenty-three journals and journal fragments owned by Smith College, The Unabridged Journals of Sylvia Plath includes two journals that Plath\'s husband, Ted Hughes, unsealed just before his death in 1998. A heavily abridged edition of Plath\'s diaries was published in 1982. Roughly two-thirds of this new unabridged edition is material that has never before been made public, revealing more fully the intensity of the poet\'s personal and literary struggles, and providing fresh insight into both her frequent desperation and the bravery with which she faced her demons. With its haunting, vibrant, and brutally honest prose, The Unabridged Journals of Sylvia Plath is essential reading for all who have been moved and fascinated by Plath\'s life and work', '[\"Non-Fiction\",\"Education\"]', 'Premium', 'Higher Education', './uploads/The Unabridged Journals of Sylvia Plath.jpg', './uploads/The Unabridged Journals of Sylvia Plath (Sylvia Plath) (Z-Library).pdf.crdownload'),
(40, 'book', 'dsg', 'sdd', 3004, 'VIka', 'LA', 'sssssssssssssssssssssssssssssssss', '[\"Fiction\",\"Business\",\"Medicine-and-Health\",\"Law\"]', 'Free', 'Elementary', './uploads/98 - Heavy User Load.png', './uploads/PERSYARATAN VISA TAIWAN.docx');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`msg_id`, `name`, `phone`, `email`, `city`, `description`) VALUES
(1, 'aaa', 'aa', 'aa@gmail.com', 'aa', 'aa'),
(2, 'lila', '01834', 'lila@gmail.com', 'ciks', 'hello there how do you do'),
(3, 'yuuu', '02934', 'uiii@gmail.com', 'citi', 'agaertee'),
(4, 'rafli', '029348', 'raf@gmail.com', 'Cikarang', 'Haii we like your page!!');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(1, 'ONE.jpg'),
(2, 'ONE.jpg'),
(3, 'top-bar-login.txt'),
(4, 'ha.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `expiration_month` tinyint(4) NOT NULL,
  `expiration_year` smallint(6) NOT NULL,
  `cvv` smallint(6) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `payment_method`, `full_name`, `card_number`, `expiration_month`, `expiration_year`, `cvv`, `price`, `date`, `status`) VALUES
(1, 'Credit', 'Trisia', '190297124', 10, 43, 334, 100000.00, '2024-05-07 17:08:51', 'success'),
(2, 'Credit', 'Rafli', '92341092', 12, 34, 822, 100000.00, '2024-05-08 03:18:53', 'success'),
(3, 'Credit', 'Lispita Sari', '038950224', 10, 32, 382, 2000000.00, '2024-05-15 03:15:38', 'success'),
(5, 'Debit', 'Johny', '9238749', 12, 33, 342, 2000000.00, '2024-05-15 03:25:02', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `timestamp`) VALUES
(1, '', '2024-05-01 14:01:52'),
(2, '', '2024-05-01 14:08:02'),
(3, 'lilis@gmail.com', '2024-05-01 14:08:13'),
(4, 'lilis@gmail.com', '2024-05-01 14:09:57'),
(5, 'tricia@gmail.com', '2024-05-01 14:12:31'),
(6, '', '2024-05-05 09:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `nickname`, `address`, `state`, `city`, `bio`) VALUES
(12, 'cc', 'ds', 'aa', NULL, NULL, NULL, NULL, NULL),
(13, 'fasdfasdf', 'asdfasdf', '$2y$10$wX7janW1/h8lIt95TvXrbOp9PzldKjr19drVOKBLRHap13EzvaBcC', NULL, NULL, NULL, NULL, NULL),
(14, '', '', '$2y$10$VtH/.DE4Me0OhT76x1xZAORieQtf0WjhCYeygRH3sWtxFNKRahOR2', NULL, NULL, NULL, NULL, NULL),
(15, 'lilis', 'lis@gmail.com', '$2y$10$PGvCPD0z02EvLhKXHQxOTurhgCTakHe5b8z3TTW5zfMVR1b3zqWZy', NULL, NULL, NULL, NULL, NULL),
(16, 'Lispita', 'aaa', '$2y$10$OnkdaSlf6Xwh1bmMmGeRdOP/Bx6QtmNKlu5tdyQZMnIeasMMivuGu', NULL, NULL, NULL, NULL, NULL),
(17, 'lulu', 'lilispitari@gmail.com', '$2y$10$uMz8.ZXWMF9Kpjhuz1zymuhIOvNCh8qbclhLrXiqf0tHqD92xyR.2', NULL, NULL, NULL, NULL, NULL),
(18, 'jan', 'jan@gmail.com', '$2y$10$ltjW2MdUtkzw8zP.ZFQOkOko1XPDwWNkRGvzFRJaqIrxbyu2MsB/y', NULL, NULL, NULL, NULL, NULL),
(19, 'jojon', 'joo@gmail.com', '$2y$10$ejI9fnARhCQjgvIAqex53exOW.P4fVzbus5FsEjKNypkIQH7Jm4s.', NULL, NULL, NULL, NULL, NULL),
(20, 'lululu', '4122424', '$2y$10$JpWLorEb91jMO4/EdnTMFez8aE7TnT.LWawnzwgXGwWaEdcDFMoiK', NULL, NULL, NULL, NULL, NULL),
(21, 'pingping', '0811', '$2y$10$bCOYSDsnVFvhlHcqXTVWHuPRUMuxy5d6QBXf7BsnLHteyBxrwc2uW', NULL, NULL, NULL, NULL, NULL),
(22, 'iging', 'igingggg@gmail.com', '$2y$10$2u9097IhzVV0PiYdt/9jlOQgb1Lxp.xGlfeSbgRIdws5Yd3TIYRyG', NULL, NULL, NULL, NULL, NULL),
(23, 'tricia', 'adenovitricia@gmail.com', '$2y$10$0aqNtTY80oYuhOa8S9UWy.pa5W90n8UU2pza7MoIfn/AL4zV.nCP2', NULL, NULL, NULL, NULL, NULL),
(24, 'rafli', 'raf@gmail.com', '$2y$10$ptV25x1ApqxT2Y2NBuavpubKi/xZZ2a3O4xvigxp.WlzSuzr1hLYa', NULL, NULL, NULL, NULL, NULL),
(25, 'ping', 'ping@gmail.com', '$2y$10$VMypnsGFRjXIRKjVYm.lH.iOgFkXvSAd0ybKCVhQjjB4jOHbfZ92G', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(12, 'cc', 'ds', 'aa'),
(13, 'fasdfasdf', 'asdfasdf', '$2y$10$wX7janW1/h8lIt95TvXrbOp9PzldKjr19drVOKBLRHap13EzvaBcC'),
(14, '', '', '$2y$10$VtH/.DE4Me0OhT76x1xZAORieQtf0WjhCYeygRH3sWtxFNKRahOR2'),
(15, 'lilis', 'lis@gmail.com', '$2y$10$PGvCPD0z02EvLhKXHQxOTurhgCTakHe5b8z3TTW5zfMVR1b3zqWZy'),
(16, 'Lispita', 'aaa', '$2y$10$OnkdaSlf6Xwh1bmMmGeRdOP/Bx6QtmNKlu5tdyQZMnIeasMMivuGu'),
(17, 'lulu', 'lilispitari@gmail.com', '$2y$10$uMz8.ZXWMF9Kpjhuz1zymuhIOvNCh8qbclhLrXiqf0tHqD92xyR.2'),
(18, 'jan', 'jan@gmail.com', '$2y$10$ltjW2MdUtkzw8zP.ZFQOkOko1XPDwWNkRGvzFRJaqIrxbyu2MsB/y'),
(19, 'jojon', 'joo@gmail.com', '$2y$10$ejI9fnARhCQjgvIAqex53exOW.P4fVzbus5FsEjKNypkIQH7Jm4s.'),
(20, 'lululu', '4122424', '$2y$10$JpWLorEb91jMO4/EdnTMFez8aE7TnT.LWawnzwgXGwWaEdcDFMoiK'),
(21, 'pingping', '0811', '$2y$10$bCOYSDsnVFvhlHcqXTVWHuPRUMuxy5d6QBXf7BsnLHteyBxrwc2uW'),
(22, 'iging', 'igingggg@gmail.com', '$2y$10$2u9097IhzVV0PiYdt/9jlOQgb1Lxp.xGlfeSbgRIdws5Yd3TIYRyG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
