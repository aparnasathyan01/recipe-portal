<?php
  // get conneciton database form config.php
  require 'config.php';
  // insertUser to insert user  with 123123123 password
  $instertUser="INSERT INTO users (email,name,password) VALUES ('johndoe@gmail.com','John Doe','e2a6613139fcd9a7b2589750fc09979a')";
  // insertData is for insert one user and some recipes at first time
  $instertData="INSERT INTO recipes (name,image,author,description,date) VALUES ('Juicy Roasted Chicken','1.jpg','John Doe',
  'Ingredients: 1 (3 pound) whole chicken giblets removed, salt and black pepper to taste, 1 tablespoon onion powder (to taste),
  ½ cup margarine (divided), 1 stalk celery (leaves removed) 
  Recipe: 
  Step 1: Preheat oven to 350 degrees F (175 degrees C).
  Step 2: Place chicken in a roasting pan, and season generously inside and out with salt and pepper. Sprinkle inside and out with onion 
  powder. Place 3 tablespoons margarine in the chicken cavity. Arrange dollops of the remaining margarine around the chickens exterior. 
  Cut the celery into 3 or 4 pieces, and place in the chicken cavity.
  Step 3: Bake uncovered 1 hour and 15 minutes in the preheated oven, to a minimum internal temperature of 180 degrees F (82 degrees C). 
  Remove from heat, and baste with melted margarine and drippings. Cover with aluminum foil, and allow to rest about 30 minutes before serving.',
  now())
  ,
  ('Paneer Butter Masala','2.jpg','John Doe','Ingredients: ½ cup vegetable oil
  ½ pound paneer (cut into 1/2-inch cubes), 2 tablespoons butter, 2 onions (finely chopped), 1 teaspoon ginger paste, 1 teaspoon garlic paste
  1 tablespoon ground cashews, 1 teaspoon ground red chiles, ½ teaspoon ground cumin, ½ teaspoon ground coriander, ½ teaspoon garam masala
  1 (8 ounce) can tomato sauce, ½ cup milk, ½ teaspoon white sugar, ½ teaspoon salt 
  Recipe: 
  Step 1: Heat oil in a large skillet over medium heat; 
  fry paneer in 2 batches until golden, about 5 minutes. Transfer fried paneer to a paper towel-lined plate to drain, retaining vegetable oil in 
  skillet. 
  Step 2: Melt butter in the same skillet over medium heat; cook and stir onion until golden brown, about 10 minutes. Add ginger paste and garlic
   paste. Continue to cook until fragrant, about 1 minute more. Stir cashews, ground red chiles, cumin, coriander, and garam masala into onion 
  mixture. Cook and stir for 1 minute.
  Step 3: Stir tomato sauce, half-and-half, milk, sugar, and salt into spice mixture; simmer until thickened, about 5 minutes. Reduce heat to low. 
  Add fried paneer and simmer until heated through, about 5 minutes more.
  ',now())
  ,
  ('Onigiri Japanese Rice Balls','3.jpg','John Doe','Ingredients: 4 cups uncooked short-grain white rice, 4 ½ cups water, ¼ teaspoon salt, 
  ¼ cup bonito shavings (dry fish flakes), 2 sheets nori (dry seaweed cut into 1/2-inch strips), 2 tablespoons sesame seeds
  Recipe: 
  Step 1: Wash the rice in a mesh strainer until the water runs clear. Combine washed rice and 4 1/2 cups water in a saucepan. Bring to a boil 
  over high heat, stirring occasionally. Reduce heat to low; cover. Simmer rice until the water is absorbed, 15 to 20 minutes. Let rice rest, 
  for 15 minutes to allow the rice to continue to steam and become tender. Allow cooked rice to cool.
  Step 2: Combine 1 cup water with the salt in a small bowl. Use this water to dampen hands before handling the rice. Divide the cooked rice 
  into 8 equal portions. Use one portion of rice for each onigiri.
  Step 3: Divide one portion of rice in two. Create a dimple in the rice and fill with a heaping teaspoon of bonito flakes. Cover with the remaining 
  portion of rice and press lightly to enclose filling inside rice ball. Gently press the rice to shape into a triangle. Wrap shaped onigiri with a 
  strip of nori. Sprinkle with sesame seeds. Repeat to make a total of 8 onigiri.'
  ,now())
  ,
  ('Plain Cake Doughnuts','4.jpg','John Doe','Ingredients: 2 cups all-purpose flour, ½ cup white sugar, 1 teaspoon salt, 1 tablespoon baking powder, 
  ¼ teaspoon ground cinnamon, 1 dash ground nutmeg, 2 tablespoons melted butter, ½ cup milk, 1 egg (beaten), 1 quart oil for frying
  Recipe:
  Step 1: Heat oil in deep-fryer to 375 degrees F (190 degrees C).
  Step 2: In a large bowl, sift together flour, sugar, salt, baking powder, cinnamon and nutmeg. Mix in butter until crumbly. Stir in milk and egg 
  until smooth. Knead lightly, then turn out onto a lightly floured surface. Roll or pat to 1/4 inch thickness. Cut with a doughnut cutter, or use 
  two round biscuit cutters of different sizes.
  Step 3: Carefully drop doughnuts into hot oil, a few at a time. Do not overcrowd pan or oil may overflow. Fry, turning once, for 3 minutes or 
  until golden. Drain on paper towels.
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

  // check if database has recipes or not
  $checkData = mysqli_query($connect,"SELECT id FROM recipes");
  if(!$data = mysqli_fetch_array($checkData)){
    mysqli_query($connect,$instertUser);
    mysqli_query($connect,$instertData);
  };
?>
