 <footer>
     <div class='width padding'>
         <div id="logo" class="flex-wrapper no-select">
             <img src="/images/logo.svg" alt="Logo" draggable="false">
             <p>Species</p>
         </div>
         <hr>
         <div class="footer-content flex-wrapper">
             <div class="flex-wrapper">
                 <div class="nav-footer">
                     <h2>Links</h2>
                     <ul>
                         <li><a href="">Bongo</a></li>
                         <li><a href="">Bongo</a></li>
                         <li><a href="">Bongo</a></li>
                         <li><a href="">Bongo</a></li>
                     </ul>
                 </div>
                 <div class="nav-footer">
                     <h2>Placeholder</h2>
                     <p style="max-width: 40em;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit temporibus, obcaecati rerum ipsum dicta dolores voluptate qui, dignissimos nam nobis similique, possimus perspiciatis labore aliquid delectus maxime quos tempore ratione.</p>
                 </div>
             </div>
         </div>
         <p style="margin-top: 1em;">
             &copy; <?php echo date("Y"); ?> <a href='https://emanueledandrea.eu'>Emanuele D'Andrea</a>
         </p>
     </div>
 </footer>

 <style>
     footer #logo p {
         font-size: 1.5em;
         font-weight: bold;
     }

     .footer-content {
         flex-direction: column;
         justify-content: left;
         flex-wrap: wrap;
     }

     .footer-content .flex-wrapper {
         align-items: start;
         gap: 2em;
         justify-content: start;
         margin-right: auto;
     }

     .nav-footer,
     ul {
         list-style: none;
     }

     hr {
         margin: 1em 0;
         color: var(--fg-color);
     }
     footer #logo.flex-wrapper{
         img {
             width: 2.5em;
         }
     }
 </style>
