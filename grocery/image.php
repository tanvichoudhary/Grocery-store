<!DOCTYPE html>
<html>
<head>
	<title>Happy Shopping!</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="shopping1.css">
</head>
<body  class="shop">
	 <h3><i class="fas fa-shopping-cart"></i></h3>
	 <header>
		<img src="gcery logo.png">
		<h2>HAPPY SHOPPING!</h2>
	 </header>
	 <div class="images">
	 <img src="https://www.teachearlyyears.com/images/made/images/uploads/article/PPfv1_630_465_84_int_s_c1.jpg">
	 <figcaption style="background-color: #045464; width: 300px; color: white;">FRUITS AND VEGETABLES<ol><li>Strawberry</li><li>Kiwi</li><li>Brocolli</li><li>Potato</li></ol></figcaption>
	 <button class="cart">ADD</button>
     </div>
	 <div class="images">
		<img src="https://images.ctfassets.net/3s5io6mnxfqz/3pLESMFjNopcam5J5qGcoT/0427544b060a8fd29e3c0b68281d56cf/AdobeStock_191057762.jpeg">
		<figcaption style="background-color: #045464; width: 300px; color: white;">SPICES<ol><li>Asafoetida</li><li>Cumin</li><li>Saffron</li><li>Cinnamon</li></ol></figcaption>
		<button class="cart">ADD</button>
	 </div>
	 <div class="images">
		<img src="https://www.world-grain.com/ext/resources/Article-Images/2018/09-September/Pulses_AdobeStock_117825265_E.jpg?1536765260">
		<figcaption style="background-color: #045464; width: 300px; color: white; ">PULSES AND CEREALS<ol><li>Wheat</li><li>Beans</li><li>Oats</li><li>Lentils</li></ol></figcaption>
		<button class="cart">ADD</button>
	  </div>
	  <div class="images">
		<img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2018/07/24/708724-680380-milk-products.jpg">
		<figcaption style="background-color: #045464; width: 300px; color: white; ">DAIRY AND POULTRY<ol><li>Egg</li><li>Milk</li><li>Cheese</li><li>Butter</li></ol></figcaption>
		<button class="cart">ADD</button>

	 </div>
	 <div class="images">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTHym4q_AR6LcNbdSb1rlykl1keDA-2HumaJA&usqp=CAU">
		<figcaption style="background-color: #045464; width: 300px; color: white; ">BAKERY PRODUCTS<ol><li>Bread</li><li>Cake</li><li>Muffin</li><li>Cupcake</li></ol></figcaption>
		<button class="cart">ADD</button>
	 </div>
	 <div class="images">
		<img src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/beveragedaily.com/article/2019/09/26/new-uk-trade-show-for-low-and-no-alcohol-beverages/10183430-1-eng-GB/New-UK-trade-show-for-low-and-no-alcohol-beverages_wrbm_large.jpg">
		<figcaption style="background-color: #045464;  width: 300px; color: white;">BEVERAGES<ol><li>Tea</li><li>Coffee</li><li>Soda</li><li>Juice</li></ol></figcaption>
		<button class="cart">ADD</button>
	 </div>
	 <div class="images">
		<img src="https://www.vantagehomemedical.com/wp-content/uploads/ngg_featured/Skin-care-essential-products-for-daily-care.jpg">
		<figcaption style="background-color: #045464 ; width: 300px; color: white;">DAILY CARE<ol><li>Shampoo</li><li>Moisturizer</li><li>Aroma Oils</li><li>Face Creams</li></ol></figcaption>
		<button class="cart">ADD</button>
	  </div>
	  <div class="images">
		<img src="https://restaurantindia.s3.ap-south-1.amazonaws.com/s3fs-public/content6230.jpg">
		<figcaption style="background-color: #045464; ; width: 300px; color: white;">READY-TO-EAT AND SNACKS<ol><li>Chips</li><li>Cookies</li><li>Pastry</li><li>Ice-cream</li></ol></figcaption>
		<button class="cart">ADD</button>
		
	  </div>
	  <div class="images">
		<img src="https://allthatjazmin.com/wp-content/uploads/2018/04/Aesthetically-Pleasing-Stationery.png">
		<figcaption style="background-color: #045464; ; width: 300px; color: white;">STATIONARY<ol><li>Pens</li><li>Pencil</li><li>NotePad</li><li>Eraser</li></ol></figcaption>
		<button class="cart">ADD</button>
		
	  </div>
	  <div class="images">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTUhjYiAH_WrtjrKD6Tloy83me3L7aNj1jifQ&usqp=CAU">
		<figcaption style="background-color: #045464; width: 300px; color: white;">DETERGENTS AND SOAPS<ol><li>Washing Powder</li><li>Washing Soap</li><li>Dish-washing Powder</li><li>Hand-wash</li></ol></figcaption>
		<button class="cart">ADD</button>
	   </div>
	  <div class="submit">
	 </div>
</body>
</html>

<script type="text/javascript">
var noti = document.querySelector('h3');
var select = document.querySelector('.select');
var button = document.getElementsByTagName('button');
for(but of button)
{
    but.addEventListener('click',(e)=>{
        var add = Number(noti.getAttribute('data-count')||0);
        noti.setAttribute('data-count',add+1);
        noti.classList.add('zero');
        var parent = e.parent.parentNode;
        var clone = parent.cloneNode(true);
        select.appendChild(clone);
        clone.lastElementChild.innerText = "Buy-now";
        if(clone)
        {
            noti.onclick=()=>
            {
                select.classList.toggle('display')
            }
        }
    })
}
</script>