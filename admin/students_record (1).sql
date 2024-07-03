

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `updated_by` int(11) NOT NULL
)


INSERT INTO `blogs` (`id`, `blog_title`, `blog_description`, `status`, `added_by`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, 'Aptech Learning', 'Abc at rate Abc', 0, 1, '2024-05-24 05:57:57', '', 0),
(3, 'Aptech Learning', 'dfsdfs', 0, 1, '0000-00-00 00:00:00', '', 0),
(4, 'Pakistan Day', 'Paksitan Aptech', 0, 1, '2024-05-27 04:57:07', '2024-05-27 08:47:56', 1),
(5, ' Pakistan Zindabad', 'Pakistan time fail', 0, 1, '2024-05-27 07:58:33', '2024-05-27 08:48:15', 1);

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_age` int(11) NOT NULL,
  `std_class` varchar(50) NOT NULL
)

INSERT INTO `students` (`id`, `std_name`, `std_age`, `std_class`) VALUES
(1, 'Jibran Ali', 25, 'Inter'),
(3, 'Faiz', 12, 'Six');



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `user_password` varchar(70) NOT NULL,
  `user_name` varchar(70) NOT NULL
)


  INSERT INTO `users` (`id`, `user_email`, `user_password`, `user_name`) VALUES
  (1, 'admin@admin.com', 'Abc@1234', 'Super Admin'),
  (2, 'majeed@gmail.com', 'Abc@1234', 'Qadeer');

ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `students`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
