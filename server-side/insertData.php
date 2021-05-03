<?php
  // get conneciton database form config.php
  require 'config.php';
  // insertUser to insert user  with 123123123 password
  $instertUser="INSERT INTO users (email,name,password) VALUES ('johndoe@gmail.com','John Doe','e2a6613139fcd9a7b2589750fc09979a')";
  // insertData is for insert one user and some recipes at first time
  $instertData="INSERT INTO recipes (name,image,author,ingredients, description,date) VALUES ('Juicy Roasted Chicken','1.jpg','John Doe',
  '1 (3 pound) whole chicken giblets removed, salt and black pepper to taste, 1 tablespoon onion powder (to taste),
  ½ cup margarine (divided), 1 stalk celery (leaves removed)', '
  Step 1: Preheat oven to 350 degrees F (175 degrees C).
  <br/>Step 2: Place chicken in a roasting pan, and season generously inside and out with salt and pepper. Sprinkle inside and out with onion 
  powder. Place 3 tablespoons margarine in the chicken cavity. Arrange dollops of the remaining margarine around the chickens exterior. 
  Cut the celery into 3 or 4 pieces, and place in the chicken cavity.
  <br/>Step 3: Bake uncovered 1 hour and 15 minutes in the preheated oven, to a minimum internal temperature of 180 degrees F (82 degrees C). 
  Remove from heat, and baste with melted margarine and drippings. Cover with aluminum foil, and allow to rest about 30 minutes before serving.',
  now())
  ,
  ('Paneer Butter Masala','2.jpg','John Doe','½ cup vegetable oil
  ½ pound paneer (cut into 1/2-inch cubes), 2 tablespoons butter, 2 onions (finely chopped), 1 teaspoon ginger paste, 1 teaspoon garlic paste
  1 tablespoon ground cashews, 1 teaspoon ground red chiles, ½ teaspoon ground cumin, ½ teaspoon ground coriander, ½ teaspoon garam masala
  1 (8 ounce) can tomato sauce, ½ cup milk, ½ teaspoon white sugar, ½ teaspoon salt', '
  Step 1: Heat oil in a large skillet over medium heat; 
  fry paneer in 2 batches until golden, about 5 minutes. Transfer fried paneer to a paper towel-lined plate to drain, retaining vegetable oil in 
  skillet. 
  <br/>Step 2: Melt butter in the same skillet over medium heat; cook and stir onion until golden brown, about 10 minutes. Add ginger paste and garlic
   paste. Continue to cook until fragrant, about 1 minute more. Stir cashews, ground red chiles, cumin, coriander, and garam masala into onion 
  mixture. Cook and stir for 1 minute.
  <br/>Step 3: Stir tomato sauce, half-and-half, milk, sugar, and salt into spice mixture; simmer until thickened, about 5 minutes. Reduce heat to low. 
  Add fried paneer and simmer until heated through, about 5 minutes more.
  ',now())
  ,
  ('Onigiri Japanese Rice Balls','3.jpg','John Doe','4 cups uncooked short-grain white rice, 4 ½ cups water, ¼ teaspoon salt, 
  ¼ cup bonito shavings (dry fish flakes), 2 sheets nori (dry seaweed cut into 1/2-inch strips), 2 tablespoons sesame seeds', ' 
  Step 1: Wash the rice in a mesh strainer until the water runs clear. Combine washed rice and 4 1/2 cups water in a saucepan. Bring to a boil 
  over high heat, stirring occasionally. Reduce heat to low; cover. Simmer rice until the water is absorbed, 15 to 20 minutes. Let rice rest, 
  for 15 minutes to allow the rice to continue to steam and become tender. Allow cooked rice to cool.
  <br/>Step 2: Combine 1 cup water with the salt in a small bowl. Use this water to dampen hands before handling the rice. Divide the cooked rice 
  into 8 equal portions. Use one portion of rice for each onigiri.
  <br/>Step 3: Divide one portion of rice in two. Create a dimple in the rice and fill with a heaping teaspoon of bonito flakes. Cover with the remaining 
  portion of rice and press lightly to enclose filling inside rice ball. Gently press the rice to shape into a triangle. Wrap shaped onigiri with a 
  strip of nori. Sprinkle with sesame seeds. Repeat to make a total of 8 onigiri.'
  ,now())
  ,
  ('Plain Cake Doughnuts','4.jpg','John Doe','2 cups all-purpose flour, ½ cup white sugar, 1 teaspoon salt, 1 tablespoon baking powder, 
  ¼ teaspoon ground cinnamon, 1 dash ground nutmeg, 2 tablespoons melted butter, ½ cup milk, 1 egg (beaten), 1 quart oil for frying','
  Step 1: Heat oil in deep-fryer to 375 degrees F (190 degrees C).
  <br/>Step 2: In a large bowl, sift together flour, sugar, salt, baking powder, cinnamon and nutmeg. Mix in butter until crumbly. Stir in milk and egg 
  until smooth. Knead lightly, then turn out onto a lightly floured surface. Roll or pat to 1/4 inch thickness. Cut with a doughnut cutter, or use 
  two round biscuit cutters of different sizes.
  <br/>Step 3: Carefully drop doughnuts into hot oil, a few at a time. Do not overcrowd pan or oil may overflow. Fry, turning once, for 3 minutes or 
  until golden. Drain on paper towels.
  ',now())
  ,
  ('Mutton Rogan Josh','5.jpg','John Doe','
  1 Kg meat, 1 cup mustard/refined oil, 3 tsp red chili powder, 3 tsp fennel powder, 2 tsp ginger powder, 2 tsp cumin powder, 3 tsp brown cardamom powder, 
  1 tsp asafoetida, 4 Green cardamom, 2 Cinnamon sticks, 2 Bay leaves, 2 Cloves, 1/3 tsp saffron (optional), 1 cup curd, A pinch of salt.','
  1.Wash the meat properly. Heat oil in a pressure cooker.
  <br/>2.Put cinnamon, bay leaves, green cardamom, cloves, a teaspoon of salt, asafoetida, and meat together.
  <br/>3.Fry meat till it turns brown. Once browned, pour a cup of water.
  <br/>4.Add the red chili powder and saffron into the meat. Keep stirring for about a minute.
  <br/>5.Mix the curd nicely in the mixer and pour it into the pressure cooker.
  <br/>6.Keep on stirring till you get a reddish tinge.
  <br/>7.Add 2 cups of water, fennel powder, ginger powder, and pressure cook for 2 minutes.
  <br/>8.Check if the meat is tender. Peel and grind green and brown cardamom and add to the meat dish.
  <br/>9.Finally sprinkle cumin powder and simmer for a minute and serve.
  ',now())
  ,
  ('Broccoli Egg Burji','6.jpg','John Doe','
  3 Whole Egg, 1 cup Broccoli florets (chopped into small pieces), 2 Onion (finely chopped), 2 Tomatoes (finely chopped), 6 Garlic cloves (finely chopped), 
  1 teaspoon Turmeric powder (Haldi), 2 teaspoon Red Chilli powder, 2 tablespoon Coriander (Dhania) Leaves (finely chopped), Salt (to taste), 
  2 tablespoon Oil','
  <br/>:
  <br/>To begin making Broccoli Egg Bhurji, heat oil in a frying pan or skillet and add finely chopped onions. When onion turns pinkish, add chopped garlic and 
  sauté till the raw smell of garlic goes away. Once it is done, add the chopped tomatoes and sauté till it turns mushy.
  Add broccoli florets and cook them for 10 minutes. After 10 minutes, add turmeric powder, red chilil powder, salt and mix everything well.
  One by one break the eggs directly into the skillet. Mix well and wait for the eggs to cook. Once you see the eggs getting cooked, take a 
  spatula and scramble it in the skillet. Scramble continuously till the eggs are finely minced and mixed well with the onion-tomato-broccoli 
  mixture. Adjust salt according to your taste and garnish with chopped coriander leaves and again mix well. Switch off the gas and serve hot. 
  ',now())
  ,
  ('Kerala Fish Curry','7.jpg','John Doe',' 
  To marinate the fish:- 
  <br/>500 f Fish (Sliced), ½ tsp Turmeric Powder, 2 tsp Lemon Juice, ½ tsp Black pepper Powder, Salt to taste. 
  <br/>For the curry:- <br/>2 tbsp Coconut Oil ,1 tsp Mustard Seeds ,10-12 Curry Leaves, 3-4 Green Chillies (Slit into halves), 2 cups Onion (Thinly sliced),2 tsp Ginger (Finely chopped), 1 tsp Garlic (Chopped), 1 cup Tomato (Chopped),½ tsp Turmeric Powder,
  Salt to taste, ½ tsp Black Pepper Powder, 1 tsp Red Chilli Powder, 200 ml Thin Coconut Milk, 300 ml Thick Coconut Milk, 1 tbsp Tamarind Paste, ½ tsp Kerala Garam Masala (Optional)','
  <br/>:
  <br/>For marination:-
  <br/>Add all the  for marinating the fish in a bowl and mix well.
  Marinate the fish for 30 minutes.
  <br/>For the curry:-
  <br/>Heat oil in a pan.
  Slightly fry the marinated fish in the oil and take out on plate and keep aside.
  In the remaining oil, add mustard seeds, curry leaves and green chililes and fry for a few seconds.
  Add onion, ginger and garlic and fry till onion turn pinkish.
  Add tomatoes and cook for a minute.
  Add turmeric powder, salt, black pepper powder and red chilli powder and cook for a minute.
  Add thin coconut milk and bring the curry to a boil.
  Drop in the fish pieces once the curry comes to a boil.
  Cook for 8-10 minutes.
  Add thick coconut milk and tamarind paste and cook for a minute.
  Add Kerala garam masala and mix well.
  Serve hot with steamed rice.
  ',now())
  ,
  ('Juicy Roasted Chicken','1.jpg','John Doe',
  '1 (3 pound) whole chicken giblets removed, salt and black pepper to taste, 1 tablespoon onion powder (to taste),
  ½ cup margarine (divided), 1 stalk celery (leaves removed)', '
  Step 1: Preheat oven to 350 degrees F (175 degrees C).
  <br/>Step 2: Place chicken in a roasting pan, and season generously inside and out with salt and pepper. Sprinkle inside and out with onion 
  powder. Place 3 tablespoons margarine in the chicken cavity. Arrange dollops of the remaining margarine around the chickens exterior. 
  Cut the celery into 3 or 4 pieces, and place in the chicken cavity.
  <br/>Step 3: Bake uncovered 1 hour and 15 minutes in the preheated oven, to a minimum internal temperature of 180 degrees F (82 degrees C). 
  Remove from heat, and baste with melted margarine and drippings. Cover with aluminum foil, and allow to rest about 30 minutes before serving.',
  now())
  ,
  ('Paneer Butter Masala','2.jpg','John Doe','½ cup vegetable oil
  ½ pound paneer (cut into 1/2-inch cubes), 2 tablespoons butter, 2 onions (finely chopped), 1 teaspoon ginger paste, 1 teaspoon garlic paste
  1 tablespoon ground cashews, 1 teaspoon ground red chiles, ½ teaspoon ground cumin, ½ teaspoon ground coriander, ½ teaspoon garam masala
  1 (8 ounce) can tomato sauce, ½ cup milk, ½ teaspoon white sugar, ½ teaspoon salt', '
  Step 1: Heat oil in a large skillet over medium heat; 
  fry paneer in 2 batches until golden, about 5 minutes. Transfer fried paneer to a paper towel-lined plate to drain, retaining vegetable oil in 
  skillet. 
  <br/>Step 2: Melt butter in the same skillet over medium heat; cook and stir onion until golden brown, about 10 minutes. Add ginger paste and garlic
   paste. Continue to cook until fragrant, about 1 minute more. Stir cashews, ground red chiles, cumin, coriander, and garam masala into onion 
  mixture. Cook and stir for 1 minute.
  <br/>Step 3: Stir tomato sauce, half-and-half, milk, sugar, and salt into spice mixture; simmer until thickened, about 5 minutes. Reduce heat to low. 
  Add fried paneer and simmer until heated through, about 5 minutes more.
  ',now())
  ,
  ('Onigiri Japanese Rice Balls','3.jpg','John Doe','4 cups uncooked short-grain white rice, 4 ½ cups water, ¼ teaspoon salt, 
  ¼ cup bonito shavings (dry fish flakes), 2 sheets nori (dry seaweed cut into 1/2-inch strips), 2 tablespoons sesame seeds', ' 
  Step 1: Wash the rice in a mesh strainer until the water runs clear. Combine washed rice and 4 1/2 cups water in a saucepan. Bring to a boil 
  over high heat, stirring occasionally. Reduce heat to low; cover. Simmer rice until the water is absorbed, 15 to 20 minutes. Let rice rest, 
  for 15 minutes to allow the rice to continue to steam and become tender. Allow cooked rice to cool.
  <br/>Step 2: Combine 1 cup water with the salt in a small bowl. Use this water to dampen hands before handling the rice. Divide the cooked rice 
  into 8 equal portions. Use one portion of rice for each onigiri.
  <br/>Step 3: Divide one portion of rice in two. Create a dimple in the rice and fill with a heaping teaspoon of bonito flakes. Cover with the remaining 
  portion of rice and press lightly to enclose filling inside rice ball. Gently press the rice to shape into a triangle. Wrap shaped onigiri with a 
  strip of nori. Sprinkle with sesame seeds. Repeat to make a total of 8 onigiri.'
  ,now())";

  // check if database has recipes or not
  $checkData = mysqli_query($connect,"SELECT id FROM recipes");
  if(!$data = mysqli_fetch_array($checkData)){
    mysqli_query($connect,$instertUser);
    mysqli_query($connect,$instertData);
  };
?>
