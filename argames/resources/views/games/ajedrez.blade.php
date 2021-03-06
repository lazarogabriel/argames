<!doctype html>
<html>
<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
			<link rel="stylesheet" href="{{ URL::asset('games/ajedrez/skins/gnomechess.css') }}">
			<link rel="stylesheet" href="{{ URL::asset('games/ajedrez/css/chess.css') }}">
			<script type="text/ecmascript" src="{{ URL::asset('games/ajedrez/common/xhr.js') }}"></script>
			<script type="text/ecmascript" src="{{ URL::asset('games/ajedrez/chess.js') }}"></script>
			
			<title>Ajefrez </title>
			<script type="text/javascript">
					var nVwPressed = false;
					function pressVwBtn(nBtnId) {
						if (nVwPressed) { document.getElementById("viewBtn" + nVwPressed).className = ""; }
						document.getElementById("viewBtn" + nBtnId).className = "pressedBtn";
						nVwPressed = nBtnId;
					}

					// Firefox only
					function onPGNLoaded(frEvnt) {
						var sFBody = frEvnt.target.result;
						chess.readPGN(sFBody, document.chessCtrl3.plyerClr2[1].checked);
					}

					// Firefox only
					function loadPGNFile() {
						var oFile = document.getElementById("PGNFileData").files[0];
						if (oFile) {
							var oFReader = new FileReader();
							oFReader.onload = onPGNLoaded;
							oFReader.readAsText(oFile);
						}
					}

					function initChess() {
						chess.useAI(document.chessCtrl1.useAI.checked);
						chess.setPromotion(document.chessCtrl1.selPromo.selectedIndex);
						chess.setFrameRate(Math.abs(Number(document.chessCtrl2.frameRateCtrl.value)) || 1000);
						chess.setSide(document.chessCtrl2.selSide.selectedIndex);
						chess.useKeyboard(document.chessCtrl2.KeybCtrl.checked);
						chess.placeById("chessDesk");
						document.chessCtrl1.plyDepthCtrl.value = "0";
						chess.setView(1);
						pressVwBtn(1);
					}
			</script>
			<style type="text/css">
					body{ 
						background-color: #1d2c38;
					}
					
					hr {
						width: 30%;
						margin-top: 32px;
						margin-bottom: 24px;
					}

					img.tbBtn {
						cursor: pointer;
						margin: 1px 3px 1px 3px;
					}

					#pgnTable {
						width: auto;
						height: auto;
						margin-left: auto;
						margin-right: auto;
						border-collapse: collapse;
						border: 0;
					}

					#pgnTable tr td { padding: 2px; }

					#chessDesk {
						clear: both;
						width: auto;
						height: auto;
						margin-top: 32px;
						margin-bottom: 32px;
					}

					#chessToolBar {
						width: 550px;
						height: auto;
						margin: 12px auto;
						background-color: #969696;
						-moz-box-shadow: inset 0 25px 27px -10px #BDBDBD;
						-webkit-box-shadow: inset 0 25px 27px -10px #BDBDBD;
						box-shadow: inset 0 25px 27px -10px #BDBDBD;
						border-bottom: 1px solid #424242;
						text-align:center;
						padding: 6px 3px 2px 3px;
					}

					#setViewBtns {
						width: auto;<p style="text-align:center;">[&nbsp;<input id="useAIAsk" name="useAI" type="checkbox" onclick="chess.useAI(this.checked);" checked /> <label for="useAIAsk">Contra la maquina</label> | Promocion: <select onchange="chess.setPromotion(this.selectedIndex);" name="selPromo"><option>Queen</option><option>Rook</option><option>Bishop</option><option>Knight</option></select> | <input type="button" name="strtBtn" value="New game" onclick="chess.organize(this.form.plyerClr1[1].checked);" /> (Human: <input type="radio" name="plyerClr1" id="white1" checked /> <label for="white1">Blanco</label> <input type="radio" name="plyerClr1" id="black1" /> <label for="black1">black</label>) | Nivel de la maquina: <input type="text" name="plyDepthCtrl" value="0" size="2" onkeypress=";if(event.keyCode===13&&chess.setPlyDepth(this.value)){alert('Ply depth setted.' + (Number(this.value) > 2 ? '\nAttention! The game could be very slow.' : ' Good game :)'));}" />&nbsp;]</p>

					<div id="chessToolBar"><div id="setViewBtns"><span id="viewBtn2" onclick="chess.setView(2);pressVwBtn(2);" onmousedown="return(false);">Vista 3D</span><span id="viewBtn1" onclick="chess.setView(1);pressVwBtn(1);" onmousedown="return(false);">Vista 2d</span><span id="viewBtn3" onclick="chess.setView(3);pressVwBtn(3);" onmousedown="return(false);">Both</span></div>
							<img class="tbBtn" src="games/ajedrez/icons/skip-backward.png" title="" onclick="chess.backToStart();" />
							<img class="tbBtn" src="games/ajedrez/icons/backward.png" title="" onclick="chess.navigate(-10, true);" />
							<img class="tbBtn" src="games/ajedrez/icons/reverse-play.png" title="" onclick="chess.navigate(-1, true);" />
							<img class="tbBtn" src="games/ajedrez/icons/stop.png" title="" onclick="chess.stopMotion();" />
							<img class="tbBtn" src="games/ajedrez/icons/play.png" title="" onclick="chess.navigate(1, true);" />
							<img class="tbBtn" src="games/ajedrez/icons/forward.png" title="" onclick="chess.navigate(10, true);" />
							<img class="tbBtn" src="games/ajedrez/icons/skip-forward.png" title="" onclick="chess.returnToEnd();" />
							<img class="tbBtn" src="games/ajedrez/icons/go-previous.png" title="" onclick="chess.navigate(-1);">
							<img class="tbBtn" src="games/ajedrez/icons/go-next.png" title="" onclick="chess.navigate(1);" />
							<img class="tbBtn" src="games/ajedrez/icons/help-hint.png" title="" onclick="chess.help();" />

						float: left;
					}

					#setViewBtns span {
						margin: 0 3px;
						display: inline-block;
						font: 12px / 13px "Lucida Grande", sans-serif;
						text-shadow: rgba(255, 255, 255, 0.4) 0 1px;
						padding: 3px 6px;
						border: 1px solid rgba(0, 0, 0, 0.6);
						background-color: #969696;
						cursor: default;
						-moz-border-radius: 3px;
						-webkit-border-radius: 3px;
						border-radius: 3px;
						-moz-box-shadow: rgba(255, 255, 255, 0.4) 0 1px, inset 0 20px 20px -10px white;
						-webkit-box-shadow: rgba(255, 255, 255, 0.4) 0 1px, inset 0 20px 20px -10px white;
						box-shadow: rgba(255, 255, 255, 0.4) 0 1px, inset 0 20px 20px -10px white;
					}
					#setViewBtns span.pressedBtn {
						background: #B5B5B5;
						-moz-box-shadow: inset rgba(0, 0, 0, 0.4) 0 -5px 12px, inset rgba(0, 0, 0, 1) 0 1px 3px, rgba(255, 255, 255, 0.4) 0 1px;
						-webkit-box-shadow: inset rgba(0, 0, 0, 0.4) 0 -5px 12px, inset rgba(0, 0, 0, 1) 0 1px 3px, rgba(255, 255, 255, 0.4) 0 1px;
						box-shadow: inset rgba(0, 0, 0, 0.4) 0 -5px 12px, inset rgba(0, 0, 0, 1) 0 1px 3px, rgba(255, 255, 255, 0.4) 0 1px;
					}
			</style>
</head>

	<body onload="initChess();" >
				
				<h1 style="text-align:center; color: white;">
					
					<span style="margin-right: 40%;">
						<img style="filter:invert(100%)" src="games/ahorcado/arrow-left-solid.svg" onclick="window.history.back();" width="35" height="35"> 
						Back 
						
					</span> 
					AJEDREZ
				</h1>
		
					
	
				<form style="color: white;" name="chessCtrl1" onsubmit="return(false);">
					<p style="text-align:center;">[&nbsp;<input id="useAIAsk" name="useAI" type="checkbox" onclick="chess.useAI(this.checked);" checked /> <label for="useAIAsk">Contra la maquina</label> | Promocion: <select onchange="chess.setPromotion(this.selectedIndex);" name="selPromo"><option>Queen</option><option>Rook</option><option>Bishop</option><option>Knight</option></select> | <input type="button" name="strtBtn" value="New game" onclick="chess.organize(this.form.plyerClr1[1].checked);" /> (Human: <input type="radio" name="plyerClr1" id="white1" checked /> <label for="white1">Blanco</label> <input type="radio" name="plyerClr1" id="black1" /> <label for="black1">black</label>) | Nivel de la maquina: <input type="text" name="plyDepthCtrl" value="0" size="2" onkeypress=";if(event.keyCode===13&&chess.setPlyDepth(this.value)){alert('Ply depth setted.' + (Number(this.value) > 2 ? '\nAttention! The game could be very slow.' : ' Good game :)'));}" />&nbsp;]</p>

					<div id="chessToolBar"><div id="setViewBtns"><span id="viewBtn2" onclick="chess.setView(2);pressVwBtn(2);" onmousedown="return(false);">Vista 3D</span><span id="viewBtn1" onclick="chess.setView(1);pressVwBtn(1);" onmousedown="return(false);">Vista 2d</span><span id="viewBtn3" onclick="chess.setView(3);pressVwBtn(3);" onmousedown="return(false);">Both</span></div>
							<img class="tbBtn" src="games/ajedrez/icons/skip-backward.png" title="" onclick="chess.backToStart();" />
							<img class="tbBtn" src="games/ajedrez/icons/backward.png" title="" onclick="chess.navigate(-10, true);" />
							<img class="tbBtn" src="games/ajedrez/icons/reverse-play.png" title="" onclick="chess.navigate(-1, true);" />
							<img class="tbBtn" src="games/ajedrez/icons/stop.png" title="" onclick="chess.stopMotion();" />
							<img class="tbBtn" src="games/ajedrez/icons/play.png" title="" onclick="chess.navigate(1, true);" />
							<img class="tbBtn" src="games/ajedrez/icons/forward.png" title="" onclick="chess.navigate(10, true);" />
							<img class="tbBtn" src="games/ajedrez/icons/skip-forward.png" title="" onclick="chess.returnToEnd();" />
							<img class="tbBtn" src="games/ajedrez/icons/go-previous.png" title="" onclick="chess.navigate(-1);">
							<img class="tbBtn" src="games/ajedrez/icons/go-next.png" title="" onclick="chess.navigate(1);" />
							<img class="tbBtn" src="games/ajedrez/icons/help-hint.png" title="" onclick="chess.help();" />
					</div>
				</form>

				<div id="chessDesk">

				</div>

				<form name="chessCtrl2" onsubmit="return(false);">
				<p style="text-align:center;">[&nbsp;Posision: <select onchange="chess.setSide(this.selectedIndex);" name="selSide"><option>Blancas</option><option>Negras</option><option selected>Posision</option></select> | <input id="useKeybAsk" name="KeybCtrl" type="checkbox" onclick="chess.useKeyboard(this.checked);" checked /> <input type="text" name="frameRateCtrl" value="1000" size="5" onchange="var nMs=new Number(this.value);if(!isNaN(nMs)&&nMs>0){chess.setFrameRate(nMs);}" /> ms&nbsp;]</p>
				</form>
				<hr/>

</body>
</html>
