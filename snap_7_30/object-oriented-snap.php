<?php

/** gets tweet by date ID
 *
 * @param PDO  $pdo PDO connection object
 * @param search by DateTime
 * @return \SplFixedArray of tweets found on that date
 * @throws \TypeError when variables are not correct data type
 */

public static function getTweetsByTweetDate(\PDO $pdo, $tweetDate) : SplFixedArray {
		};
	// create dates for midnight of the date and midnight of the next day//
	$startDateString = $tweetDate->format('Y-m-d') . ' 00:00:00';
	$startDate = new DateTime($startDateString);
	$endDate = new DateTime($startDateString);
	$endDate->add(new DateInterval('P1D'));

	// create query template//
	$query = "SELECT tweetProfileId, tweetID, tweetContent, tweetDate FROM tweet WHERE tweetDate >=
:startDate AND tweetDate < :endDate";
	$statement = $pdo->prepare($query);

	//bind tweet date id to the place holder in the template/
	$parameters = [
		'startDate' => $startDate->format("Y-m-d H:i:s.u"),
		'endDate' => $endDate->format("Y-m-d H:i:s.u"),
	];

	//build an array of tweets//
	$tweets = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !==false) {
		try {
			$tweet = new Tweet($row ["tweetProfileId"], $row ["tweetId"], $row ["tweetContent"], $row["tweetDate"]);
			$tweets[$tweets->key()] = $tweet;
			$tweet->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($tweets);

}