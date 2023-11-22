<footer>

<body>

    
    <p>Entre em contato com nossa equipe de desenvolvimento. </p>

    <ul>
        <li><a href="https://www.instagram.com/caiosergiom" target="_blank">Instagram</a></li>
        <li><a href="https://www.linkedin.com/in/caiosergiom" target="_blank">LinkedIn</a></li>
        <li><a href="https://github.com/caiosergio93" target="_blank">GitHub</a></li>
    </ul>



</body>        

<p>&copy; <?php echo date("Y"); ?> Todos os direitos reservados a CaioS. Desenvolviment .</p>

    
</footer>
<script type="text/javascript">

        function deletar(){
            let modal = document.querySelector('.modal-container');
            modal.style.display = 'block';
        }
        
        function modalClose(){
            let modal = document.querySelector('.modal-container');
            modal.style.display = 'none';

            const divMessage = document.querySelector(".alert");
            const msg = "Deletar Cliente cancelado";

            const message = document.createElement("div");
              message.classList.add("message");
              message.innerText = msg;
              divMessage.appendChild(message);
              
              setTimeout(() => {
               message.style.display = "none" ;
              }, 3000); 
        }

        function adicionar(){
            const divMessage = document.querySelector(".alert");
            const msg = "Cadrastado com sucesso!";

            const message = document.createElement("div");
              message.classList.add("message");
              message.innerText = msg;
              divMessage.appendChild(message);
              
              setTimeout(() => {
               message.style.display = "none" ;
              }, 3000); 
        }

    </script>
    </body>
  </html>