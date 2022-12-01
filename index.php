<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Monopoly</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="rjedition.js"></script>
	<script type="text/javascript" src="ai.js"></script>
	<script type="text/javascript" src="monopoly.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
	<div id="popupbackground"></div>
	<div id="popupwrap">
		<div id="popup">
			<div style="position: relative;">

				<div id="popuptext"></div>
				<div id="popupdrag"></div>
			</div>
		</div>
	</div>

	<div id="statsbackground"></div>
	<div id="statswrap">
		<div id="stats">
			<div style="position: relative;">
				<img id="statsclose" src="images/close.png" title="Close" alt="x" />
				<div id="statstext"></div>
				<div id="statsdrag"></div>
			</div>
		</div>
	</div>

	<p id="noscript">
		Nota: Esta página não funcionará sem JavaScript.
	</p>

	<div id="refresh">		
		Atualize esta página para iniciar um novo jogo.
	</div>


	<div id="deed">
		<div id="deed-normal" style="display: none;">
			<div id="deed-header">
				<div style="margin: 5px; font-size: 11px;">T I T L E&nbsp;&nbsp;D E E D</div>
				<div id="deed-name"></div>
			</div>
			<table id="deed-table">
				<tr>
					<td colspan="2">
						ALUGUEL&nbsp;$<span id="deed-baserent">12</span>.
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Com 1 Casa</td>
					<td style="text-align: right;">$&nbsp;&nbsp;&nbsp;<span id="deed-rent1">60</span>.</td>
				</tr>
				<tr>
					<td style="text-align: left;">Com 2 Casas</td>
					<td style="text-align: right;"><span id="deed-rent2">180</span>.</td>
				</tr>
				<tr>
					<td style="text-align: left;">Com 3 Casas</td>
					<td style="text-align: right;"><span id="deed-rent3">500</span>.</td>
				</tr>
				<tr>
					<td style="text-align: left;">Com 4 Casas</td>
					<td style="text-align: right;"><span id="deed-rent4">700</span>.</td>
				</tr>
				<tr>
					<td colspan="2">
						<div style="margin-bottom: 8px;">Com Hotel R$<span id="deed-rent5">900</span>.</div>
						<div>Valor Hipoteca $<span id="escritura-hipoteca">80</span>.</div>
						<div>Custo das casas $<span id="escritura-casapreço">100</span>. cada</div>
						<div>Hoteis, $<span id="escritura-hotelpreço">100</span>. mais 4 casas</div>
						<div style="font-size: 9px; font-style: italic; margin-top: 5px;">Se um jogador é proprietário de TODOS os Lotes de qualquer Grupo de Cor, a renda é duplicada nos Lotes Não Melhorados desse grupo.</div>
					</td>
				</tr>
			</table>
		</div>

		<div id="deed-mortgaged">
			<div id="deed-mortgaged-name"></div>
			<p>&bull;</p>
			<div>HIPOTECADO</div>
			<div> por R$<span id="deed-mortgaged-mortgage">80</span></div>
			<p>&bull;</p>
			<div style="font-style: italic; font-size: 13px; margin: 10px;">O cartão deve ser virado para este lado se a propriedade for hipotecada</div>
		</div>

		<div id="deed-special">
			<div id="deed-special-name"></div>
			<div id="deed-special-text"></div>
			<div id="deed-special-footer">
				Valor da hipoteca
				<span style="float: right;">$<span id="deed-special-mortgage">100</span>.</span>
			</div>
		</div>
	</div>

	<table id="board">
		<tr>
			<td class="cell board-corner" id="cell20"></td>
			<td class="cell board-top" id="cell21"></td>
			<td class="cell board-top" id="cell22"></td>
			<td class="cell board-top" id="cell23"></td>
			<td class="cell board-top" id="cell24"></td>
			<td class="cell board-top" id="cell25"></td>
			<td class="cell board-top" id="cell26"></td>
			<td class="cell board-top" id="cell27"></td>
			<td class="cell board-top" id="cell28"></td>
			<td class="cell board-top" id="cell29"></td>
			<td class="cell board-corner" id="cell30"></td>
		</tr><tr>
			<td class="cell board-left" id="cell19"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell31"></td>
		</tr><tr>
			<td class="cell board-left" id="cell18"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell32"></td>
		</tr><tr>
			<td class="cell board-left" id="cell17"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell33"></td>
		</tr><tr>
			<td class="cell board-left" id="cell16"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell34"></td>
		</tr><tr>
			<td class="cell board-left" id="cell15"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell35"></td>
		</tr><tr>
			<td class="cell board-left" id="cell14"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell36"></td>
		</tr><tr>
			<td class="cell board-left" id="cell13"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell37"></td>
		</tr><tr>
			<td class="cell board-left" id="cell12"></td>
			<td colspan="9" class="board-center"></td>
			<td class="cell board-right" id="cell38"></td>
		</tr><tr>
			<td class="cell board-left" id="cell11"></td>
			<td colspan="9" class="board-center">
				<div id="jail"></div>
			</td>
			<td class="cell board-right" id="cell39"></td>
		</tr><tr>
			<td class="cell board-corner" id="cell10"></td>
			<td class="cell board-bottom" id="cell9"></td>
			<td class="cell board-bottom" id="cell8"></td>
			<td class="cell board-bottom" id="cell7"></td>
			<td class="cell board-bottom" id="cell6"></td>
			<td class="cell board-bottom" id="cell5"></td>
			<td class="cell board-bottom" id="cell4"></td>
			<td class="cell board-bottom" id="cell3"></td>
			<td class="cell board-bottom" id="cell2"></td>
			<td class="cell board-bottom" id="cell1"></td>
			<td class="cell board-corner" id="cell0"></td>
		</tr>
	</table>

	<div id="moneybarwrap">
		<div id="moneybar">
			<table>
				<tr id="moneybarrow1" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p1arrow" class="money-bar-arrow" alt=">"/></td>
					<td id="p1moneybar" class="moneybarcell">
						<div><span id="p1moneyname" >Jogador 1</span>:</div>
						<div>$<span id="p1money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow2" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p2arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p2moneybar" class="moneybarcell">
						<div><span id="p2moneyname" >Jogador 2</span>:</div>
						<div>$<span id="p2money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow3" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p3arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p3moneybar" class="moneybarcell">
						<div><span id="p3moneyname" >Jogador 3</span>:</div>
						<div>$<span id="p3money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow4" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p4arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p4moneybar" class="moneybarcell">
						<div><span id="p4moneyname" >Jogador 4</span>:</div>
						<div>$<span id="p4money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow5" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p5arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p5moneybar" class="moneybarcell">
						<div><span id="p5moneyname" >Jogador 5</span>:</div>
						<div>$<span id="p5money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow6" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p6arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p6moneybar" class="moneybarcell">
						<div><span id="p6moneyname" >Jogador 6</span>:</div>
						<div>$<span id="p6money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow7" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p7arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p7moneybar" class="moneybarcell">
						<div><span id="p7moneyname" >Jogador 7</span>:</div>
						<div>$<span id="p7money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrow8" class="money-bar-row">
					<td class="moneybararrowcell"><img src="images/arrow.png" id="p8arrow" class="money-bar-arrow" alt=">" /></td>
					<td id="p8moneybar" class="moneybarcell">
						<div><span id="p8moneyname" >Jogador 8</span>:</div>
						<div>$<span id="p8money">1500</span></div>
					</td>
				</tr>
				<tr id="moneybarrowbutton">
					<td class="moneybararrowcell">&nbsp;</td>
					<td style="border: none;">
						<input type="button" id="viewstats" value="Ver status" title="Veja uma janela pop-up que mostra uma lista das propriedades de cada jogador." />
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="setup">
		<div style="margin-bottom: 20px;">
			Selecione o número de jogadores.
			<select id="playernumber" title="Selecione o número de jogadores para o jogo.">
				<option>2</option>
				<option>3</option>
				<option selected="selected">4</option>
				<option>5</option>
				<option>6</option>
				<!--<option>7</option>
				<option>8</option>-->
			</select>
		</div>

		<div id="player1input" class="player-input">
			Jogador 1: <input type="text" id="player1name" title="Nome do jogador" maxlength="16" value="Jogador 1" />
			<select id="player1color" title="Player color">
				<option style="color: aqua;">Aqua</option>
				<option style="color: black;">Black</option>
				<option style="color: blue;">Blue</option>
				<option style="color: fuchsia;">Fuchsia</option>
				<option style="color: gray;">Gray</option>
				<option style="color: green;">Green</option>
				<option style="color: lime;">Lime</option>
				<option style="color: maroon;">Maroon</option>
				<option style="color: navy;">Navy</option>
				<option style="color: olive;">Olive</option>
				<option style="color: orange;">Orange</option>
				<option style="color: purple;">Purple</option>
				<option style="color: red;">Red</option>
				<option style="color: silver;">Silver</option>
				<option style="color: teal;">Teal</option>
				<option selected="selected" style="color: yellow;">Yellow</option>
			</select>
			<select id="player1ai" title="Escolha se este jogador é controlado por um humano ou pelo computador." onclick="document.getElementById('player1name').disabled = this.value !== '0';">
				<option value="0" selected="selected">Humano</option>
				<option value="1">IA</option>
			</select>
		</div>

		<div id="player2input" class="player-input">
			Jogador 2: <input type="text" id="player2name" title="Nome do jogador" maxlength="16" value="Jogador 2" />
			<select id="player2color" title="Player color">
				<option style="color: aqua;">Aqua</option>
				<option style="color: black;">Black</option>
				<option selected="selected" style="color: blue;">Blue</option>
				<option style="color: fuchsia;">Fuchsia</option>
				<option style="color: gray;">Gray</option>
				<option style="color: green;">Green</option>
				<option style="color: lime;">Lime</option>
				<option style="color: maroon;">Maroon</option>
				<option style="color: navy;">Navy</option>
				<option style="color: olive;">Olive</option>
				<option style="color: orange;">Orange</option>
				<option style="color: purple;">Purple</option>
				<option style="color: red;">Red</option>
				<option style="color: silver;">Silver</option>
				<option style="color: teal;">Teal</option>
				<option style="color: yellow;">Yellow</option>
			</select>
			<select id="player2ai" title="Escolha se este jogador é controlado por um humano ou pelo computador." onclick="document.getElementById('player2name').disabled = this.value !== '0';">
				<option value="0" selected="selected">Humano</option>
				<option value="1">IA</option>
			</select>
		</div>

		<div id="player3input" class="player-input">
			Jogador 3: <input type="text" id="player3name" title="Nome do jogador" maxlength="16" value="Jogador 3" />
			<select id="player3color" title="Player color">
				<option style="color: aqua;">Aqua</option>
				<option style="color: black;">Black</option>
				<option style="color: blue;">Blue</option>
				<option style="color: fuchsia;">Fuchsia</option>
				<option style="color: gray;">Gray</option>
				<option style="color: green;">Green</option>
				<option style="color: lime;">Lime</option>
				<option style="color: maroon;">Maroon</option>
				<option style="color: navy;">Navy</option>
				<option style="color: olive;">Olive</option>
				<option style="color: orange;">Orange</option>
				<option style="color: purple;">Purple</option>
				<option selected="selected" style="color: red;">Red</option>
				<option style="color: silver;">Silver</option>
				<option style="color: teal;">Teal</option>
				<option style="color: yellow;">Yellow</option>
			</select>
			<select id="player3ai" title="Escolha se este jogador é controlado por um humano ou pelo computador." onclick="document.getElementById('player3name').disabled = this.value !== '0';">
				<option value="0" selected="selected">Humano</option>
				<option value="1">IA</option>
			</select>
		</div>

		<div id="player4input" class="player-input">
			Jogador 4: <input type="text" id="player4name" title="Nome do jogador" maxlength="16" value="Jogador 4" />
			<select id="player4color" title="Player color">
				<option style="color: aqua;">Aqua</option>
				<option style="color: black;">Black</option>
				<option style="color: blue;">Blue</option>
				<option style="color: fuchsia;">Fuchsia</option>
				<option style="color: gray;">Gray</option>
				<option style="color: green;">Green</option>
				<option selected="selected" style="color: lime;">Lime</option>
				<option style="color: maroon;">Maroon</option>
				<option style="color: navy;">Navy</option>
				<option style="color: olive;">Olive</option>
				<option style="color: orange;">Orange</option>
				<option style="color: purple;">Purple</option>
				<option style="color: red;">Red</option>
				<option style="color: silver;">Silver</option>
				<option style="color: teal;">Teal</option>
				<option style="color: yellow;">Yellow</option>
			</select>
			<select id="player4ai" title="Escolha se este jogador é controlado por um humano ou pelo computador." onclick="document.getElementById('player4name').disabled = this.value !== '0';">
				<option value="0" selected="selected">Humano</option>
				<option value="1">IA</option>
			</select>
		</div>

		<div id="player5input" class="player-input">
			Jogador 5: <input type="text" id="player5name" title="Nome do jogador" maxlength="16" value="Jogador 5" />
			<select id="player5color" title="Player color">
				<option style="color: aqua;">Aqua</option>
				<option style="color: black;">Black</option>
				<option style="color: blue;">Blue</option>
				<option style="color: fuchsia;">Fuchsia</option>
				<option style="color: gray;">Gray</option>
				<option selected="selected" style="color: green;">Green</option>
				<option style="color: lime;">Lime</option>
				<option style="color: maroon;">Maroon</option>
				<option style="color: navy;">Navy</option>
				<option style="color: olive;">Olive</option>
				<option style="color: orange;">Orange</option>
				<option style="color: purple;">Purple</option>
				<option style="color: red;">Red</option>
				<option style="color: silver;">Silver</option>
				<option style="color: teal;">Teal</option>
				<option style="color: yellow;">Yellow</option>
			</select>
			<select id="player5ai" title="Escolha se este jogador é controlado por um humano ou pelo computador." onclick="document.getElementById('player5name').disabled = this.value !== '0';">
				<option value="0" selected="selected">Humano</option>
				<option value="1">IA</option>
			</select>
		</div>

		<div id="player6input" class="player-input">
			Jogador 6: <input type="text" id="player6name" title="Nome do jogador" maxlength="16" value="Jogador 6" />
			<select id="player6color" title="Player color">
				<option selected="selected" style="color: aqua;">Aqua</option>
				<option style="color: black;">Black</option>
				<option style="color: blue;">Blue</option>
				<option style="color: fuchsia;">Fuchsia</option>
				<option style="color: gray;">Gray</option>
				<option style="color: green;">Green</option>
				<option style="color: lime;">Lime</option>
				<option style="color: maroon;">Maroon</option>
				<option style="color: navy;">Navy</option>
				<option style="color: olive;">Olive</option>
				<option style="color: orange;">Orange</option>
				<option style="color: purple;">Purple</option>
				<option style="color: red;">Red</option>
				<option style="color: silver;">Silver</option>
				<option style="color: teal;">Teal</option>
				<option style="color: yellow;">Yellow</option>
			</select>
			<select id="player6ai" title="Escolha se este jogador é controlado por um humano ou pelo computador." onclick="document.getElementById('player6name').disabled = this.value !== '0';">
				<option value="0" selected="selected">Humano</option>
				<option value="1">IA</option>
			</select>
		</div>
<!--
		<div id="player7input" class="player-input">
			Jogador 7: <input type="text" id="player7name" title="Nome do jogador" maxlength="16" value="Jogador 7" />
			<select id="player7color" title="Player color">
				<option style="color: aqua;">Aqua</option>
				<option style="color: black;">Black</option>
				<option style="color: blue;">Blue</option>
				<option style="color: fuchsia;">Fuchsia</option>
				<option style="color: gray;">Gray</option>
				<option style="color: green;">Green</option>
				<option style="color: lime;">Lime</option>
				<option style="color: maroon;">Maroon</option>
				<option style="color: navy;">Navy</option>
				<option style="color: olive;">Olive</option>
				<option selected="selected" style="color: orange;">Orange</option>
				<option style="color: purple;">Purple</option>
				<option style="color: red;">Red</option>
				<option style="color: silver;">Silver</option>
				<option style="color: teal;">Teal</option>
				<option style="color: yellow;">Yellow</option>
			</select>
			<select id="player7ai" title="Escolha se este jogador é controlado por um humano ou pelo computador." onclick="document.getElementById('player7name').disabled = this.value !== '0';">
				<option value="0" selected="selected">Humano</option>
				<option value="1">IA</option>
			</select>
		</div>

		<div id="player8input" class="player-input">
			Jogador 8: <input type="text" id="player8name" title="Nome do jogador" maxlength="16" value="Jogador 8" />
			<select id="player8color" title="Player color">
				<option style="color: aqua;">Aqua</option>
				<option style="color: black;">Black</option>
				<option style="color: blue;">Blue</option>
				<option style="color: fuchsia;">Fuchsia</option>
				<option style="color: gray;">Gray</option>
				<option style="color: green;">Green</option>
				<option style="color: lime;">Lime</option>
				<option style="color: maroon;">Maroon</option>
				<option style="color: navy;">Navy</option>
				<option style="color: olive;">Olive</option>
				<option style="color: orange;">Orange</option>
				<option selected="selected" style="color: purple;">Purple</option>
				<option style="color: red;">Red</option>
				<option style="color: silver;">Silver</option>
				<option style="color: teal;">Teal</option>
				<option style="color: yellow;">Yellow</option>
			</select>
			<select id="player8ai" title="Escolha se este jogador é controlado por um humano ou pelo computador." onclick="document.getElementById('player8name').disabled = this.value !== '0';">
				<option value="0" selected="selected">Humano</option>
				<option value="1">IA</option>
			</select>
		</div>
	-->

		<div style="margin: 20px 0px;">
			<input type="button" value="Iniciar Jogo" onclick="setup();" title="Comece a jogar." />
		</div>

		<div id="noF5">Observação: Atualizar esta página ou sair dela pode encerrar o jogo sem aviso prévio.</div>
	</div>

	<div id="control">
		<table>
			<tr>
				<td style="text-align: left; vertical-align: top; border: none;">
					<div id="menu">
						<table id="menutable" cellspacing="0">
							<tr>
								<td class="menu-item" id="buy-menu-item">

									<a href="javascript:void(0);" title="Visualize alertas e compre a propriedade em que você pousou.">Comprar</a>
								</td>
								<td class="menu-item" id="manage-menu-item">

									<a href="javascript:void(0);" title="Veja, hipoteque e melhore sua propriedade.">Gerenciar</a>
								</td>
								<td class="menu-item" id="trade-menu-item">

									<a href="javascript:void(0);" title="Troque propriedades com outros jogadores.">Trocar</a>
								</td>
							</tr>
						</table>
					</div>

					<div id="buy">
						<div id="alert"></div>
						<div id="landed"></div>
					</div>

					<div id="manage">
						<div id="option">
							<div id="buildings" title="Casas disponíveis"></div>
							<input type="button" value="Comprar casa" id="buyhousebutton"/>
							<input type="button" value="Hipoteca" id="mortgagebutton" />
							<input type="button" value="Vender casa" id="sellhousebutton"/>
						</div>
						<div id="owned"></div>
					</div>
				</td>
				<td style="vertical-align: top; border: none;">
					<div id="quickstats" style="">
							<div><span id="pname" >Jogador 1</span>:</div>
							<div><span id="pmoney">R$1500</span></div>
					</div>
					<div>
						<div id="die0" title="Die" class="die die-no-img"></div>
						<div id="die1" title="Die" class="die die-no-img"></div>
					</div>

				</td>
			</tr><tr>
				<td colspan="2" style="border: none">
					<div style="padding-top: 8px;">
						<input type="button" id="nextbutton" title="Rolar os dado e mover seu peão de acordo." value="Rola os dados"/>
						<input type="button" id="resignbutton" title="Se você ão puder pagar as dívidas você deve declarar falência e desistir do jogo." value="Desistir" onclick="game.resign();" />
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div id="trade">
		<table style="border-spacing: 3px;">
			<tr>
				<td class="trade-cell">
					<div id="trade-leftp-name"></div>
				</td>
				<td class="trade-cell">
					<div id="trade-rightp-name"></div>
				</td>
			</tr>
			<tr>
				<td class="trade-cell">
					$&nbsp;<input id="trade-leftp-money" value="0" title="Entre o valor que deverá ser trocado com o outro jogador." />
				</td>
				<td class="trade-cell">
					$&nbsp;<input id="trade-rightp-money" value="0" title="Entre o valor que deverá ser trocado com o outro jogador." />
				</td>
			</tr>
			<tr>
				<td id="trade-leftp-property" class="trade-cell"></td>
				<td id="trade-rightp-property" class="trade-cell"></td>
			</tr>
			<tr>
				<td colspan="2" class="trade-cell">
					<input type="button" id="proposetradebutton" value="Propor negociação" onclick="game.proposeTrade();" title="Troque o dinheiro e as propriedades marcadas acima." />
					<input type="button" id="canceltradebutton" value="Cancelar negociação" onclick='game.cancelTrade();' title="Cancelar a troca." />
					<input type="button" id="accepttradebutton" value="Aceitar negociação" onclick="game.acceptTrade();" title="Aceite a negociação proposta." />
					<input type="button" id="rejecttradebutton" value="Rejeitar negociação" onclick='game.cancelTrade();' title="Rejeitar a negociação proposta." />
				</td>
			</tr>
		</table>
	</div>

</body>
</html>
