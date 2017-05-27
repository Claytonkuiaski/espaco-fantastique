		</main>
		<footer>
			<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.2583205881133!2d-46.542789950112756!3d-23.66671837129958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42f67484c0b5%3A0x90319a4635431f6a!2sR.+Gon%C3%A7alo+Fernandes%2C+321+-+Jardim+Bela+Vista%2C+Santo+Andr%C3%A9+-+SP!5e0!3m2!1spt-BR!2sbr!4v1495548151880" width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="rodape-1">
				<div class="container">
					<div class="endereco-rodape">
						<h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s"><img src="images/point-map.png" alt=""> Rua Gonçalo Fernandes, 321 - Santo André</h2>	
					</div>
					<div class="contato-rodape">
						<i class="fone fa fa-phone wow bounceInRight" data-wow-duration="1s" data-wow-delay="1.2s" aria-hidden="true"> <span>(11)<strong> 4436-4621</strong></span></i>
						<a href="#"><i class="email fa fa-envelope wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1.2s" aria-hidden="true"> <span><strong>contato</strong>@espacofantastique.com.br</span></i></a>
					</div>
					<div class="botao-orcamento wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">
						<a href="#">Fale Conosco Solicite um Orçamento</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="rodape-2">
					<h2>&copy 2017 Espaço Fantastique | Buffet Infantil Todos os Direitos Reservados.</h2>
					<h3>Site Desenvolvido <a href="https://plug.ag/" target="blank"><img src="images/logo-plug.png" alt="logo-plug"></a>Agência Web</h3>
				</div>
			</div>
		</footer>
	</div> <!--layout-->
	
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/wow/dist/wow.min.js"></script>
	<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
	<script>
      $(function(){       
        $('.toggle').click(function(){
          $('.layout').toggleClass('ativo');
          $('.menu-responsivo').toggleClass('ativo');
          $(this).toggleClass('ativo');
        });
        new WOW().init();
      });
      	$('.slides').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: true
		});
    </script>
</body>
</html>