<?php
  // get conneciton database form config.php
  require 'config.php';
  // insertUser to insert user  with 123123123 password
  $insertUser="INSERT INTO users (email,name,password) VALUES ('johndoe@gmail.com','John Doe','e2a6613139fcd9a7b2589750fc09979a')";
  // insertData is for insert one user and some recipes at first time
  $insertData="INSERT INTO recipes (name,image,author,ingredients, description,date) VALUES ('Juicy Roasted Chicken','1.jpg','John Doe',
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
  <br/>Step 1: Heat oil in deep-fryer to 375 degrees F (190 degrees C).
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
  <br/>step 1: Wash the meat properly. Heat oil in a pressure cooker.
  <br/>step 2: Put cinnamon, bay leaves, green cardamom, cloves, a teaspoon of salt, asafoetida, and meat together.
  <br/>step 3: Fry meat till it turns brown. Once browned, pour a cup of water.
  <br/>step 4: Add the red chili powder and saffron into the meat. Keep stirring for about a minute.
  <br/>step 5: Mix the curd nicely in the mixer and pour it into the pressure cooker.
  <br/>step 6: Keep on stirring till you get a reddish tinge.
  <br/>step 7: Add 2 cups of water, fennel powder, ginger powder, and pressure cook for 2 minutes.
  <br/>step 8: see if the meat is tender. Peel and grind green and brown cardamom and add to the meat dish.
  <br/>step 9: Finally sprinkle cumin powder and simmer for a minute and serve.
  ',now())
  ,
  ('Broccoli Egg Burji','6.jpg','John Doe','
  3 Whole Egg, 1 cup Broccoli florets (chopped into small pieces), 2 Onion (finely chopped), 2 Tomatoes (finely chopped), 6 Garlic cloves (finely chopped),
  1 teaspoon Turmeric powder (Haldi), 2 teaspoon Red Chilli powder, 2 tablespoon Coriander (Dhania) Leaves (finely chopped), Salt (to taste),
  2 tablespoon Oil','
  <br/>step 1: To begin making Broccoli Egg Bhurji, heat oil in a frying pan or skillet and add finely chopped onions.
  <br/>step 2: When onion turns pinkish, add chopped garlic and sauté till the raw smell of garlic goes away. Once it is done, add the chopped tomatoes and sauté till it turns mushy.
  <br/>step 3: Add broccoli florets and cook them for 10 minutes. After 10 minutes, add turmeric powder, red chilil powder, salt and mix everything well.
  <br/>step 4: One by one break the eggs directly into the skillet. Mix well and wait for the eggs to cook.
  <br/>step 5: Once you see the eggs getting cooked, take a spatula and scramble it in the skillet. Scramble continuously till the eggs are finely minced and mixed well with the onion-tomato-broccoli
  mixture.
  <br/>step 6: Adjust salt according to your taste and garnish with chopped coriander leaves and again mix well. Switch off the gas and serve hot.
  ',now())
  ,
  ('Kerala Fish Curry','7.jpg','John Doe','
  To marinate the fish:-
  <br/>500 f Fish (Sliced), ½ tsp Turmeric Powder, 2 tsp Lemon Juice, ½ tsp Black pepper Powder, Salt to taste.
  <br/>For the curry:- <br/>2 tbsp Coconut Oil ,1 tsp Mustard Seeds ,10-12 Curry Leaves, 3-4 Green Chillies (Slit into halves), 2 cups Onion (Thinly sliced),2 tsp Ginger (Finely chopped), 1 tsp Garlic (Chopped), 1 cup Tomato (Chopped),½ tsp Turmeric Powder,
  Salt to taste, ½ tsp Black Pepper Powder, 1 tsp Red Chilli Powder, 200 ml Thin Coconut Milk, 300 ml Thick Coconut Milk, 1 tbsp Tamarind Paste, ½ tsp Kerala Garam Masala (Optional)','

  <br/>For marination:-
  <br/>Add all the  for marinating the fish in a bowl and mix well.
  Marinate the fish for 30 minutes.
  <br/>For the curry:-
  <br/>step 1: Heat oil in a pan. Slightly fry the marinated fish in the oil and take out on plate and keep aside. In the remaining oil, add mustard seeds, curry leaves and green chililes and fry for a few seconds.
  <br/>step 2: Add onion, ginger and garlic and fry till onion turn pinkish.
  <br/>step 3: Add tomatoes and cook for a minute.
  <br/>step 4: Add turmeric powder, salt, black pepper powder and red chilli powder and cook for a minute.
  <br/>step 5: Add thin coconut milk and bring the curry to a boil.
  <br/>step 6: Drop in the fish pieces once the curry comes to a boil, Cook for 8-10 minutes.
  <br/>step 7: Add thick coconut milk and tamarind paste and cook for a minute. Add Kerala garam masala and mix well. Serve hot with steamed rice.
  ',now())
  ,
  ('Dalgona Coffee','8.jpg','John Doe','Instant coffee, sugar, water,milk','
  <br/>Step 1: In a medium bowl, combine sugar, coffee, and water.
  <br/>Step 2: Using a hand mixer or a whisk, vigorously whisk until mixture turns silky smooth and shiny,
  then continue whisking until it thickens and holds its lofty, foamy shape.
  br/>Step 3: Fill a glass most of the way full with ice and milk, then dollop and swirl the whipped coffee mixture on top, mixing before drinking, if desired.',now())
  ,
  ('Chicken seekh kebab','9.jpg','John Doe','1/2 cup minced chicken,1/2 teaspoon garlic paste, 5 sprigs coriander leaves
  , 1/2 teaspoon garam masala powder, 1/4 teaspoon green cardamom, salt As required, 1 tablespoon bread crumbs, 1/2 teaspoon ginger paste, 1/2 red onion, 1/2 teaspoon red chilli powder
  , 1/2 teaspoon coriander powder, 2 tablespoon butter, 1/2 tablespoon lemon juice','
  <br/>Step 1: Blend the veggies well
  <br/>Step 2: Blend the minced chicken and add in the spices
  <br/>Step 3: Start with sticking kebabs to the skewers, Now add in the melted butter, lemon juice and bread crumbs. Combine all these well and let it rest for 30 minutes. Apply some butter on your hands and start sticking the minced chicken mix on the skewers.
  <br/>Step 4: Start roasting the Kebabs and serve.',now())
  ,
  ('Beef Chow Fun','10.jpg','John Doe','1 1/2 tablespoons light soy sauce ,1 1/2 teaspoons dark soy sauce, 1 tablespoon Chinese rice wine (or dry sherry), 1/2 teaspoon sugar
  , 1/2 teaspoon sesame oil, 1 teaspoon cornstarch, 1 pound beef flank steak (sliced 1/4-inch thick across the grain),8 ounces fresh baby corn, 2 garlic cloves
  , 1/2 pound fresh hor fun, 2 tablespoons oil, 1 tablespoon Chinese black bean sauce, 1 tablespoon oyster sauce','
  <br/>Step 1: In a large bowl, mix together the light soy sauce, dark soy sauce, rice wine, sugar, sesame oil, and cornstarch.Add the beef strips and marinate for at least 15 minutes.
  <br/>Step 2: prepare the baby corn by rinsing them in cold water, draining them, and slicing them in half.by rinsing them in cold water, draining them, and slicing them in half.
  <br/>Step 3: Once the beef is done marinating, heat a wok or a large skillet, add 1 tablespoon of oil, and stir fry the beef until it browns.Stir in the black bean sauce and stir fry for another 30 seconds. Remove to a bowl and set aside.
  <br/>Step 4: When the oil is hot, add the garlic and stir fry until aromatic.Add the hor fun and stir fry for 1 minute.Add the baby corn and quickly cook for another 30 seconds.
  <br/>Step 5: Return the beef and any accumulated juices along with the oyster sauce into the wok and stir fry with the noodles for 1 or 2 minutes. serve hot.',now())
  ,
  ('Almond Cookies','11.jpg','John Doe','2 cups flour,1/2 teaspoon baking powder,1/2 teaspoon baking soda
  , 1/8 teaspoon salt,1/2 cup butter,1/2 cup shortening, 3/4 cup white sugar, 1 egg, 2 1/2 teaspoons almond extract, 30 whole almonds (blanched)','
  <br/>Step 1: Gather the ingredients and preheat oven to 325 F/162.5 C.
  <br/>Step 2: In a large bowl, sift the flour, baking powder, baking soda, and salt.In a medium bowl, use an electric mixer to beat together the butter and shortening, and sugar.
  <br/>Step 3: Add the egg and almond extract and beat until well blended.Add to the flour mixture and mix well. Note: The dough will be crumbly at this point.
  <br/>Step 4: Use your fingers to form the mixture into a dough, and then form the dough into 2 rolls or logs that are 10 to 12 inches long.Wrap and refrigerate for 2 hours
  <br/>Step 5: Take a log and lightly score the dough at 3/4-inch intervals so that you have 15 pieces and cut the dough.Roll each piece into a ball and place on a lightly-greased cookie tray, approximately 1 1/2-inches apart.
  <br/>Step 6: Add an almond in the center of each cookie and press down lightly. Repeat with the remaining dough.Brush each cookie lightly with a beaten egg.
  <br/>Step 7: Bake for 15 minutes to 18 minutes, until golden brown.',now())
  ,
  ('Tomato Rice','12.jfif','John Doe','tsp oil, 1 tsp mustard, 1 tsp cumin, ½ tsp urad dal, ½ tsp chana dal, few fenugreek, 1 inch cinnamon
  , 4 cloves, few curry leaves, few cashew, 1 onion (finely chopped), 1 green chilli (slit), ¼ tsp ginger paste, 2 tomato (finely chopped), ¼ tsp turmeric, ½ tsp kashmiri red chilli powder
  , ½ tsp coriander powder, ½ tsp salt, 2 tbsp mint / pudina (chopped), 2 cup rice (cooked), 2 tbsp coriander (finely chopped).','
  <br/>Step 1: firstly, in a large kadai heat 3 tsp oil and splutter tempering. Saute few cashews until golden brown.
  <br/>Step 2: add 1 onion, 1 green chilli, ¼ tsp ginger paste and saute well. now add 2 tomatoes and saute until tomatoes turn soft and mushy.
  <br/>Step 3: additionally add ¼ tsp turmeric, ½ tsp chilli powder, ½ tsp coriander powder, ½ tsp salt and 2 tbsp mint leaves. saute and cook for a minute.
  <br/>Step 4: add 2 cups cooked rice and mix gently. cover and simmer for 5 minutes to absorb all masala. finally, serve tomato rice with raita of your choice.',now())
  ,
  ('Prawns Biriyani','13.jfif','John Doe','250g Basmati rice, 1 cup Prawns, 2 tomato,2 Onion,4 green chilli,1 inch Ginger, 6 flakes garlic,2 tsp Coriander powder,
  1/4 tsp Turmeric powder, Coriander leaves, Pudina, Spices - 4 each (clove and cardamom), ghee or oil - 4 tbsp, Salt to taste.','
  <br/>Step 1: Wash and soak rice for 1/2 an hour. Drain it.
  <br/>Step 2: Grind ginger, garlic, green chilli, coriander powder, onion, coriander leaves, adding salt. Marinate the cleaned prawn in the above mixture for 15 mins.
  <br/>Step 3: In a pressure cooker, heat ghee or oil. Add crushed spices, cashews, pudina leaves, chopped onion and saute till golden brown.
  <br/>Step 4: Add the marinated prawn along with the onion saute till the oil separates. Add the tomatoes chopped and turmeric powder to it. Stir for few seconds.
  <br/>Step 5: Now, add rice and pour water in 1:1.5 cups ratio. When its starts boiling, close cooker and cook in high pressure for 5-7 mins. serve with raitha.',now())
  ,
  ('kappa Masala','14.jpg','John Doe','5 cups of kappa or tapicoa, cubed (about 500 gm), 5 cloves of garlic, crushed, 5 dry red chillies (adjust to taste), 2 tbsp of coconut oil
  ,1/2 tsp of black mustard seeds, 1/2 tsp of split urad dal, 1 strand of curry leaves, 1/4 tsp of turmeric powder, Salt to taste.','
  <br/>Step 1: Peel the tapioca and wash it, Cut into rough cubes, cook it in a pan with enough water(about 10-15 mins).
  <br/>Step 2: coarsely grind 5 cloves of garlic and 5 red chillies together
  <br/>Step 3: Heat 2 tbsp coconut oil and add 1/2 tsp mustard seeds. add the garlic-chilli paste along with 1/4 tsp turmeric powder and fry for 10 seconds or until fragrant.
  <br/>Step 4: Add the cooked tapioca, salt, and the curry leaves. Mix well and continue to stir until the spices coat the tapioca.',now())
  ,
  ('Cheesecake','15.jpg','John Doe','1 1/4 cup Digestive biscuits, 1⁄4 cup melted butter, 11⁄2 cups cream cheese, 1 cup mascarpone cheese,1 cup whipping cream
  , 1⁄2 cup castor sugar, 3 eggs, 1 tbsp lemon juice, 1 cup sliced strawberries, 4tbsp castor sugar.','
  <br/>Step 1: Preheat the oven to 180°C.
  <br/>Step 2: In a bowl, combine crushed the digestive biscuits and melted butter. press the mixture into an 8-inch springform pan. Bake at 180°C for 10 minutes.
  <br/>Step 3: to make the filling, slowly beat the cream cheese, mascarpone cheese, whipping cream and sugar together until everything is well combined.Add eggs, one at a time, and mix just until blended. Add in the lemon juice
  <br/>Step 4: Pour the filling on the baked Biscuit base. place the springform pan in a water bath and pop it into the oven. reduce the temperature to 150°C and bake for 1 hour.
  <br/>Step 5: Once the cheesecake is baked, let it cool for 15 minutes, take it out of the cake pan In a bowl add the strawberries and sugar. Combine until strawberries are coated with sugar. Let it sit for 2 minutes.
  Top the cheesecake with the strawberry mix.',now())
  ,
  ('Cream Cheese Pasta','16.jpg','John Doe','225g regular pasta,160g Cream cheese, 1/4 cup Parmesan chees,1 tbsp Olive oi, Garli, Chili flakes, Salt & pepper.','
  <br/>Step 1: In a large pot of boiling salted water, cook pasta.Right before draining, reserve a cup of starchy pasta water.
  <br/>Step 2: in a large skillet warm 1 Tbsp of olive oil and gently fry the garlic
  <br/>Step 3: Then stir the cream cheese and about 1/2 cup of starchy pasta water. Stir to combine oil, cream cheese, water and create a nice and creamy emulsion. Add parmesan cheese and stir well. Your pasta sauce is ready.
  <br/>Step 4: Drain and add your pasta to the skillet. Stir well to evenly coat the pasta in the sauce, add more cooking water
  <br/>Step 5: Serve immediately with a drizzle of good olive oil or extra virgin olive oil, freshly grated parmesan, and freshly ground black pepper.',now())
  ,
  ('Lasagna','17.jpg','John Doe','Bacon slices,2 medium Onions-chopped,2 Garlic cloves-chopped,2 Carrots-chopped, 2 Celery stick chopped,Olive oil,500 gram Lamb (minced)
  , 2 Tomatoe tins,salt & Pepper, basil, 250 gram Lasagna pasta sheets, 1 large Tomato, sliced ,500 ml Fresh crea,100 gram Parmesan cheese, grated.','
  <br/>Step 1: Put a pan on heat, add 4 strips of bacon and sprinkle some olive oil over it. Fry the bacon for few minutes.
  <br/>Step 2: Add garlic and fry till its golden. Add onion, carrots, celery, and cook until the mixture softens. Into this vegetable mixture add chopped basil stocks, chopped tomatoes, water, minced lamb, stir and bring it to boil.
  <br/>Step 3: Simmer the bolognese sauce for an hour and a half, To the sauce add 50 grams of parmesan cheese.
  <br/>Step 4: In a baking tray layer the bolognese sauce, followed by lasagna sheets and whipped cream.
  <br/>Step 5: Season the cream layer with Salt, pepper and oregano. Repeat the layering process with the bolognese sauce, lasagna sheets and cream. Top the last layer with grated parmesan cheese.
  <br/>Step 6: Top up with sliced tomatoes, basil leaves and sprinkle some olive oil on it. Cover the tray with foil and bake in a 200°C preheated oven for 30 minutes.
  <br/>Step 7: Remove the foil and bake for another 20 minutes, Serve hot.',now())";


  // check if database has recipes or not
  $checkData = mysqli_query($connect,"SELECT id FROM recipes");
  if(!$data = mysqli_fetch_array($checkData)){
    mysqli_query($connect,$insertUser);
    mysqli_query($connect,$insertData);
  };
?>
