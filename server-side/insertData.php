<?php
  // get conneciton database form config.php
  require 'config.php';
  // insertUser to insert user JohnDoe with 123123123 password
  $instertUser="INSERT INTO users (email,name,password) VALUES ('johndoe@gmail.com','John Doe','johndoe101')";
  // insertData is for insert one user and some recipes at first time
  $instertData="INSERT INTO recipes (name,image,author,description,date) VALUES ('Porkolt (Hungarian Stew) Made With Pork','54726.jpg','John Doe','A flavorful stew, Pörkölt is redolent with the fragrance of paprika and bell peppers. It has few ingredients, and is surprisingly easy to make. Save time by using boneless pork chops and cubing them after they are browned. There should be enough salt in the canned tomatoes to season the stew, but if not, add more to your taste. Use best-quality, real Hungarian paprika for best results. We prefer to serve it with noodles, but galuska (Hungarian dumplings) or rice are good,too',
  now())
  ,
  ('Pasta Pomodoro','632125.jpg','John Doe','1 (16 ounce) package angel hair pasta
  1/4 cup olive oil
  1/2 onion, chopped
  4 cloves garlic, minced
  2 cups roma (plum) tomatoes, diced
  2 tablespoons balsamic vinegar
  ',now())
  ,
  ('Mediterranean Pasta','683300.jpg','John Doe','1 (8 ounce) package linguine pasta
  3 slices bacon
  1 pound boneless chicken breast half, cooked and diced
  salt to taste
  1 (14.5 ounce) can peeled and diced tomatoes with juice

  1/4 teaspoon dried rosemary
  1/3 cup crumbled feta cheese
  2/3 cup pitted black olives
  1 (6 ounce) can artichoke hearts, drained
  ',now())
  ,
  ('Labneh (Lebanese Yogurt)','3707126.jpg','John Doe','1 1/2 cups Greek yogurt
  1/4 cup extra-virgin olive oil
  1 tablespoon chopped fresh mint

  1 tablespoon chopped fresh dill
  1/2 teaspoon kosher salt, or to taste

  ',now())
  ,
  ('Fresh Fruit Minty Dip','712299.jpg','John Doe','
  2 cups Greek yogurt
  1 teaspoon honey
  1 teaspoon vanilla extract

  1 teaspoon ground cinnamon
  1/3 cup confectioners sugar
  12 fresh mint leaves, chopped
  ',now())
  ,
  ('Pink Fruit Dip','211613.jpg','John Doe','
  2 (6 ounce) containers vanilla yogurt
  1 cup mayonnaise
  1 cup sour cream

  1/4 cup white sugar
  1/4 cup grenadine
  ',now())
  ,
  ('Coffee Flavored Fruit Dip','35678.jpg','John Doe','1 (8 ounce) package cream cheese, softened
  1 (8 ounce) container sour cream
  1/2 cup brown sugar

  1/3 cup coffee-flavored liqueur
  1 (8 ounce) container frozen whipped topping, thawed
  ',now())
  ,
  ('Coffee Flavored Fruit Dip','35678.jpg','John Doe','1 (8 ounce) package cream cheese, softened
  1 (8 ounce) container sour cream
  1/2 cup brown sugar

  1/3 cup coffee-flavored liqueur
  1 (8 ounce) container frozen whipped topping, thawed
  ',now())
  ,
  ('Fruit Dip VI','212033.jpg','John Doe','2 (8 ounce) packages cream cheese, softened
  1 cup brown sugar

  2 teaspoons vanilla extract
  ',now())
  ,
  ('Loaded Queso Fundido','1810432.jpg','John Doe','1 cup chicken broth
  2 pounds shredded American cheese
  1 tablespoon olive oil
  2 skinless, boneless chicken breast halves - cut into cubes
  3 links Mexican chorizo, casing removed and meat crumbled
  1 (10 ounce) package sliced button mushrooms

  2 tomatoes, seeded and diced
  1/2 yellow onion, diced
  2 jalapenos, seeded and diced
  2 green onions, diced
  1 clove garlic, or to taste, minced
  8 ounces shredded Cheddar cheese
  ',now())
  ,
  ('Too Much Chocolate Cake','1130307.jpg','John Doe','
  1 (18.25 ounce) package devils food cake mix
  1 (5.9 ounce) package instant chocolate pudding mix
  1 cup sour cream
  1 cup vegetable oil

  4 eggs
  1/2 cup warm water
  2 cups semisweet chocolate chips
  ',now())
  ,
  ('Flourless Chocolate Cake I','54829.jpg','John Doe','1/2 cup water
  1/4 teaspoon salt
  3/4 cup white sugar

  18 (1 ounce) squares bittersweet chocolate
  1 cup unsalted butter
  6 eggs',now())
  ,
  ('Chocolate Covered Strawberries','845742.jpg','John Doe','16 ounces milk chocolate chips
  2 tablespoons shortening

  1 pound fresh strawberries with leaves
  ',now())
  ,
  ('Aunt Teens Creamy Chocolate Fudge','4104013.jpg','John Doe','1 (7 ounce) jar marshmallow creme
  1 1/2 cups white sugar
  2/3 cup evaporated milk
  1/4 cup butter
  1/4 teaspoon salt

  2 cups milk chocolate chips
  1 cup semisweet chocolate chips
  1/2 cup chopped nuts
  1 teaspoon vanilla extract
  ',now())
  ,
  ('Sugar Cookie Icing','4897522.jpg','John Doe','1 cup confectioners sugar
  2 teaspoons milk
  2 teaspoons light corn syrup

  1/4 teaspoon almond extract
  assorted food coloring
  ',now())";
  // check if database have recipes or not
  $checkData = mysqli_query($connect,"SELECT id FROM recipes");
  if(!$data = mysqli_fetch_array($checkData)){
    mysqli_query($connect,$instertUser);
    mysqli_query($connect,$instertData);
  };
?>
