LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'The name of the wind','2013-01-01'),(2,'A wise man\'s fear','2016-01-01');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;
