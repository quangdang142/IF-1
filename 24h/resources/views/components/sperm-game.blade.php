
	<div class="container mt-5 border" style="position: relative;">
		<h1 class="text-center text-danger">Cuộc đua kì thú</h1>
		<h4> <b class="text-success">LIFE DOOR --></b> </h4>
		<div class="d-flex flex-column">
			<img src="../image/sperm.png" style="width: 32px;height: 32px; transform: rotate(45deg);" class="mt-3 elephant"/>
			<img src="../image/sperm.png" style="width: 32px;height: 32px; transform: rotate(45deg);" class="mt-3 pig"/>
			<img src="../image/sperm.png" style="width: 32px;height: 32px; transform: rotate(45deg);" class="mt-3 sheep"/>
		<div>
		<img src="../Image/ovum.png" style="width: 200px;height: 200px; position: absolute;top: 20%;left: 90%;"></div>
		<div class="mt-5">
			<button class="btn btn-success" onclick="startGame()">Play</button>
			<button class="btn btn-danger" onclick="stopGame()">Stop</button>
			<button class="btn btn-primary" onclick="reset()">Reset</button>
		<div>

	</div>

	<h1 class="text-danger winner text-center" ></h1>

	<script type="text/javascript">
		
		var text = $(".winner");
		var start;
		function startGame() {
			clearInterval(start);
			elephant = 0;
			pig = 0;
			sheep = 0;
			start = setInterval(running,40);
		}

		function reset() {
			elephant = 0;
			pig = 0;
			sheep = 0;
			$(".elephant").css("margin-left",elephant);
			$(".pig").css("margin-left", pig + "px");
			$(".sheep").css("margin-left", sheep + "px");
			stop();

		}
		var elephant = 0;
		var pig = 0;
		var sheep = 0;

		function running() {
			elephant += Math.floor(Math.random() * 10);
			pig += Math.floor(Math.random() * 10);
			sheep += Math.floor(Math.random() * 10);

			$(".elephant").css("margin-left",elephant);
			$(".pig").css("margin-left", pig + "px");
			$(".sheep").css("margin-left", sheep + "px");
			

			if(elephant >= 1000){
				text.text("Sperm 1 to live");			
				stopGame();
			}
			if (pig >= 1000){
				text.text("Sperm 2 to live");			
				stopGame();
			}
			if (sheep >= 1000){
				text.text("Sperm 3 to live");			
				stopGame();
			}

		}


		function stopGame() {
				clearInterval(start);
		
		}
	</script>
