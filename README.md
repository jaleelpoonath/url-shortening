# url-shortening
URL Shortner
A URL shortner service is that takes a long URL and generates a shorter version of it. When the short URL is typed in the browser window, it redirects to the actual URL.
Model Link.php,
Controller LinkController.php,
View home.blade.php,
Main controller functions used are
  urlToShortCode ( main function), 
  urlExistsCheck   (check if the given url already exist in database),
  createShortCode  (it create short url with the help of a custome function getTocken and php substr function. getTocken always returns a unique value becouse we are using last inserted id as $seed parameter),
  getToken (it generate a random alpha-numeric string with defined length)
