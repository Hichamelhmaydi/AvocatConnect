
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AvocatAganda</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body id="home">
    
<nav class="bg-white  shadow shadow-gray-300 h-20  w-100 px-8 md:px-auto">
	<div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
		 
		<div class="text-indigo-500 md:order-1">
			 
                <img src="img/AvocatAgenda.png" alt="logo" width="80px" style="margin-right:748px;">
		</div>
		<div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
			<ul class="flex font-semibold justify-between">
                

				<li class="md:px-4 md:py-2 text-slate-800"><a href="#">Accueil</a></li>
				<li class="md:px-4 md:py-2 hover:text-slate-800"><a href="#equipe">équipe</a></li>
				<li class="md:px-4 md:py-2 hover:text-slate-800"><a href="#">Cabinet</a></li>
				<li class="md:px-4 md:py-2 hover:text-slate-800"><a href="#">Propos</a></li>
				<li class="md:px-4 md:py-2 hover:text-slate-800"><a href="#contact">Contact</a></li>
			</ul>
		</div>
		<div class="order-2 md:order-3">
      <a href="login.html" target="_blank">
			<button class="px-4 py-2 bg-slate-800 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2">
                 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span>incription</span>
            </button></a>
		</div>
    <div class="order-2 md:order-3 m-1">
      <a href="log_in.html" target="_blank">
			<button class="px-4 py-2 bg-slate-800 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2">
                 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span>Login</span>
            </button></a>
		</div>
	</div>
</nav>



<main>
    <div class="flex items-center justify-between bg-zinc-800 p-10 mt-40	">
         
        <div class="w-1/2">
          <h2 class="text-3xl font-bold text-amber-400 mb-5">
            <span class="border-b-2 border-gray-300">Notre cabinet</span>
          </h2>
          <div class="bg-slate-800 p-6 mb-4">
            <p class="text-white mb-2">Qui sommes-nous ?</p>
            <p class="text-white mb-2">Nos engagements</p>
            <p class="text-white mb-4">Notre méthode</p>
            <button class="bg-amber-400 text-white px-6 py-2 text-sm hover:bg-gray-400">
              EN SAVOIR PLUS
            </button>
          </div>
        </div>
      
         
        <div class="w-1/2 relative">
          <img
            src="img/cabinet.jpg"
            alt="Curved Structure"
            class="object-cover w-full h-full rounded-lg"
          />
        </div>
      </div>


      <div class="bg-zinc-800 py-10 mt-40">
        <h2 class="text-3xl font-bold text-amber-400 mb-6 text-center">
          <span class="border-b-2 border-gray-300">Notre Savoir-Faire</span>
        </h2>
      
      
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 px-10 ">
      
          <div class="relative group">
            <div class="bg-cover bg-center h-32 sm:h-48" style="background-image: url('img/arbitage.png');">
              <div class="bg-gray-900 bg-opacity-50 w-full h-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-sm sm:text-lg">Droit d'arbitage</p>
              </div>
            </div>
          </div>
          
          <div class="relative group">
            <div class="bg-cover bg-center h-32 sm:h-48" style="background-image: url('img/commercial.jpg');">
              <div class="bg-gray-900 bg-opacity-50 w-full h-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-sm sm:text-lg">Droit de commercial</p>
              </div>
            </div>
          </div>
           
          <div class="relative group">
            <div class="bg-cover bg-center h-32 sm:h-48" style="background-image: url('img/Rural.jpg');">
              <div class="bg-gray-900 bg-opacity-50 w-full h-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-sm sm:text-lg">Droit de Rural</p>
              </div>
            </div>
          </div>
       
          <div class="relative group">
            <div class="bg-cover bg-center h-32 sm:h-48" style="background-image: url('img/social.jpg');">
              <div class="bg-gray-900 bg-opacity-50 w-full h-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-sm sm:text-lg">Droit de social</p>
              </div>
            </div>
          </div>
       
          <div class="relative group">
            <div class="bg-cover bg-center h-32 sm:h-48" style="background-image: url('img/societes.jpg');">
              <div class="bg-gray-900 bg-opacity-50 w-full h-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-sm sm:text-lg">Droit des sociétés</p>
              </div>
            </div>
          </div>
        
          <div class="relative group">
            <div class="bg-cover bg-center h-32 sm:h-48" style="background-image: url('img/pénale.jpg');">
              <div class="bg-gray-900 bg-opacity-50 w-full h-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-sm sm:text-lg">Droit de pénale</p>
              </div>
            </div>
          </div>
        </div>
      
    
        <div class="flex justify-center mt-8">
          <button class="bg-amber-400 text-white px-6 py-2 text-sm hover:bg-gray-400">
            EN SAVOIR PLUS
          </button>
        </div>
      </div>
      





      <div class="bg-zinc-800 py-10 mt-40" id="equipe">
      
        <h2 class="text-4xl font-bold text-amber-400 mb-10 text-center">
          <span class="border-b-4 border-gray-300 pb-1">Les avocats</span>
        </h2>
      
       
        <div class="flex flex-wrap justify-center gap-6 px-6">
           

          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer1.jpg" alt="Laurent Delvolvé" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Laurent Delvolvé</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
              <button class="text-white uppercase text-sm">RÉSERVÉ</button>
            </a>
            </div>
          </div>
      
        
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer2.jpg" alt="Sébastien Poniatowski" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Sébastien Poniatowski</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
        
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer3.jpg" alt="Alexandre Suay" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Alexandre Suay</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
         
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer4.jpg" alt="Charles Casal" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Charles Casal</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
       
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer5.jpg" alt="Lorenzo Serafini" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Lorenzo Serafini</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
       
          
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer6.jpg" alt="Jean Dupont" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Jean Dupont</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
           
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer7.jpg" alt="Marie Lefevre" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Marie Lefevre</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
           
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer8.jpg" alt="Paul Martin" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Paul Martin</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
        

          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer9.jpg" alt="Emma Bernard" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Emma Bernard</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
           
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer10.jpg" alt="Louis Dupuis" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Louis Dupuis</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
      
      
          <div class="w-48 sm:w-56 lg:w-64 bg-white shadow-md">
            <img src="img/lawyer11.jpg" alt="Claire Durant" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
              <p class="font-bold text-gray-700">Claire Durant</p>
            </div>
            <div class="bg-amber-400 py-2 text-center">
              <a href="reserve.html" target="_blank">
                <button class="text-white uppercase text-sm">RÉSERVÉ</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      







      <section class="bg-white dark:bg-zinc-800 mt-40" id="contact">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-amber-400 dark:text-amber-400">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            <form action="#"  class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-amber-400 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
            </form>
        </div>
      </section>
</main>

<footer>
    


<footer class="bg-white rounded-lg shadow m-4 dark:bg-zinc-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>

</footer>
<script src="https://cdn.tailwindcss.com"></script>
<script src="./script/script.js"></script>
</body>
</html>