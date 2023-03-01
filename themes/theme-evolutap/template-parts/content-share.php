<div class="d-none">
	<!-- facebook -->
    <a 
    class="facebook-share-button share-button-folk ml-9" 
    href="" 
    data-social="facebook"
    id="facebook-share-btt" 
    rel="nofollow" 
    target="_blank">Link Facebook</a>

    <script>
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {            
            //altera a URL do botão
            document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.href);
        }, false);
    </script>
    <!-- end facebook -->

    <!-- twitter -->
    <a 
    class="twitter-share-button share-button-folk ml-9" 
    href=""
    data-social="twitter" 
    id="twitter-share-btt" 
    rel="nofollow" 
    target="_blank" >Link Twitter</a>

    <script>
        //Constrói a URL depois que o DOM estiver pronto        
        document.addEventListener("DOMContentLoaded", function() {
            var url = encodeURIComponent(window.location.href);
            var titulo = encodeURIComponent(document.title);
            //var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
            //altera a URL do botão
            document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo;
             
            //se for usar o atributo via, utilize a seguinte url
            //document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via;
        }, false);
    </script>
    <!-- end twitter -->

    <!-- linkedin -->
    <a 
    class="linkedin-share-button share-button-folk"
    href=""
    data-social="linkedin" 
    id="linkedin-share-btt" 
    rel="nofollow" 
    target="_blank" >linkedin</a>

    <script>
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = encodeURIComponent(window.location.href); //url
            var titulo = encodeURIComponent(document.title); //título
            var linkedinLink = "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo;
             
            //tenta obter o conteúdo da meta tag description
            var summary = document.querySelector("meta[name='description']");
            summary = (!!summary)? summary.getAttribute("content") : null;
             
            //se a meta tag description estiver ausente...
            if(!summary){
                //...tenta obter o conteúdo da meta tag og:description
                summary = document.querySelector("meta[property='og:description']");
                summary = (!!summary)? summary.getAttribute("content") : null;
            }
            //altera o link do botão
            linkedinLink = (!!summary)? linkedinLink + "&summary=" + encodeURIComponent(summary) : linkedinLink;
            document.getElementById("linkedin-share-btt").href = linkedinLink;
        }, false);
    </script>
    <!-- end linkedin -->
</div>