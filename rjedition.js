function Square(name, pricetext, color, price, groupNumber, baserent, rent1, rent2, rent3, rent4, rent5) {
	this.name = name;
	this.pricetext = pricetext;
	this.color = color;
	this.owner = 0;
	this.mortgage = false;
	this.house = 0;
	this.hotel = 0;
	this.groupNumber = groupNumber || 0;
	this.price = (price || 0);
	this.baserent = (baserent || 0);
	this.rent1 = (rent1 || 0);
	this.rent2 = (rent2 || 0);
	this.rent3 = (rent3 || 0);
	this.rent4 = (rent4 || 0);
	this.rent5 = (rent5 || 0);
	this.landcount = 0;

	if (groupNumber === 3 || groupNumber === 4) {
		this.houseprice = 50;
	} else if (groupNumber === 5 || groupNumber === 6) {
		this.houseprice = 100;
	} else if (groupNumber === 7 || groupNumber === 8) {
		this.houseprice = 150;
	} else if (groupNumber === 9 || groupNumber === 10) {
		this.houseprice = 200;
	} else {
		this.houseprice = 0;
	}
}

function Card(text, action) {
	this.text = text;
	this.action = action;
}

function corrections() {
	document.getElementById("cell1name").textContent = "Av. Presidente Vargas";


	document.getElementById("enlarge5token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; bottom: 20px;" />';
	document.getElementById("enlarge15token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge25token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge35token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge12token").innerHTML += '<img src="images/electric_icon.png" height="60" width="48" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge28token").innerHTML += '<img src="images/water_icon.png" height="60" width="78" alt="" style="position: relative; top: -20px;" />';
}

function utiltext() {
	return '&nbsp;&nbsp;&nbsp;&nbsp;Se um "Utilit??rio" for de propriedade, o aluguel ?? 4 vezes o valor mostrado nos dados.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;Se ambos os "Utilit??rios" forem de propriedade, o aluguel ?? 10 vezes o valor mostrado nos dados.';
}

function transtext() {
	return '<div style="font-size: 14px; line-height: 1.5;">Rent<span style="float: right;">$25.</span><br />Se 2 ferrovias s??o de propriedade<span style="float: right;">50.</span><br />Se 3 &nbsp; &nbsp; " &nbsp; &nbsp; " &nbsp; &nbsp; "<span style="float: right;">100.</span><br />Se 4 &nbsp; &nbsp; " &nbsp; &nbsp; " &nbsp; &nbsp; "<span style="float: right;">200.</span></div>';
}

function luxurytax() {
	addAlert(player[turn].name + " pagou $100 por aterrissar no Imposto de Renda.");
	player[turn].pay(100, 0);

	$("#landed").show().text("Voc?? desembarcou no Imposto de Renda. Pague $ 100.");
}

function citytax() {
	addAlert(player[turn].name + " pagou $200 por aterrissar no Imposto de Renda.");
	player[turn].pay(200, 0);

	$("#landed").show().text("Voc?? desembarcou no Imposto de Renda. Pague $200.");
}

var square = [];

square[0] = new Square("In??cio", "RECEBA R$200 DE SAL??RIO AO PASSAR.", "#FFFFFF");
square[1] = new Square("Av. Presidente Vargas", "$60", "#8B4513", 60, 3, 2, 10, 30, 90, 160, 250);
square[2] = new Square("Cofre", "COMPRE UMA CARTA E SIGA AS INSTRU????ES", "#FFFFFF");
square[3] = new Square("Av. Rio Branco", "R$60", "#8B4513", 60, 3, 4, 20, 60, 180, 320, 450);
square[4] = new Square("Receita Federal", "Pague R$200, Neymar", "#FFFFFF");
square[5] = new Square("Esta????o Largo do Machado", "R$200", "#FFFFFF", 200, 1);
square[6] = new Square("Rua S??o Clemente", "R$100", "#87CEEB", 100, 4, 6, 30, 90, 270, 400, 550);
square[7] = new Square("Sorte ou rev??s", "COMPRE UMA CARTA E SIGA AS INSTRU????ES", "#FFFFFF");
square[8] = new Square("Avenida Pasteur", "R$100", "#87CEEB", 100, 4, 6, 30, 90, 270, 400, 550);
square[9] = new Square("Rua Pinheiro Machado", "R$120", "#87CEEB", 120, 4, 8, 40, 100, 300, 450, 600);
square[10] = new Square("Visita ?? pris??o", "", "#FFFFFF");
square[11] = new Square("Rua Uruguaiana", "R$140", "#FF0080", 140, 5, 10, 50, 150, 450, 625, 750);
square[12] = new Square("Companhia El??trica", "R$150", "#FFFFFF", 150, 2);
square[13] = new Square("Rua da Carioca", "R$140", "#FF0080", 140, 5, 10, 50, 150, 450, 625, 750);
square[14] = new Square("Rua do Catete", "R$160", "#FF0080", 160, 5, 12, 60, 180, 500, 700, 900);
square[15] = new Square("Esta????o da Cinel??ndia", "R$200", "#FFFFFF", 200, 1);
square[16] = new Square("Avenida Brasil", "R$180", "#FFA500", 180, 6, 14, 70, 200, 550, 750, 950);
square[17] = new Square("Cofre", "COMPRE UMA CARTA E SIGA AS INSTRU????ES", "#FFFFFF");
square[18] = new Square("Rodovia Presidente Dutra", "R$180", "#FFA500", 180, 6, 14, 70, 200, 550, 750, 950);
square[19] = new Square("Av. L??cio Costa", "R$200", "#FFA500", 200, 6, 16, 80, 220, 600, 800, 1000);
square[20] = new Square("Estacionamento gr??tis", "", "#FFFFFF");
square[21] = new Square("Rua da Passagem", "R$220", "#FF0000", 220, 7, 18, 90, 250, 700, 875, 1050);
square[22] = new Square("Sorte ou rev??s", "COMPRE UMA CARTA E SIGA AS INSTRU????ES", "#FFFFFF");
square[23] = new Square("Rua Barata Ribeiro", "R$220", "#FF0000", 220, 7, 18, 90, 250, 700, 875, 1050);
square[24] = new Square("Av. Infante Dom Henrique", "R$240", "#FF0000", 240, 7, 20, 100, 300, 750, 925, 1100);
square[25] = new Square("Esta????o Gl??ria", "R$200", "#FFFFFF", 200, 1);
square[26] = new Square("Rua Silveira Martins", "R$260", "#FFFF00", 260, 8, 22, 110, 330, 800, 975, 1150);
square[27] = new Square("Avenida Maracan??", "R$260", "#FFFF00", 260, 8, 22, 110, 330, 800, 975, 1150);
square[28] = new Square("Companhia de ??guas e Esgoto", "R$150", "#FFFFFF", 150, 2);
square[29] = new Square("Av. Borges de Medeiros", "R$280", "#FFFF00", 280, 8, 24, 120, 360, 850, 1025, 1200);
square[30] = new Square("V?? para a pris??o", "V?? diretamente para a pris??o. N??o passe pelo In??cio. N??o receba R$200.", "#FFFFFF");
square[31] = new Square("Avenida Atl??ntica", "R$300", "#008000", 300, 9, 26, 130, 390, 900, 1100, 1275);
square[32] = new Square("Av. Nossa Sra. de Copacabana", "R$300", "#008000", 300, 9, 26, 130, 390, 900, 1100, 1275);
square[33] = new Square("Cofre", "COMPRE UMA CARTA E SIGA AS INSTRU????ES", "#FFFFFF");
square[34] = new Square("Av. Princesa Isabel", "R$320", "#008000", 320, 9, 28, 150, 450, 1000, 1200, 1400);
square[35] = new Square("Esta????o General Os??rio", "R$200", "#FFFFFF", 200, 1);
square[36] = new Square("Sorte ou rev??s", "COMPRE UMA CARTA E SIGA AS INSTRU????ES", "#FFFFFF");
square[37] = new Square("Rua Bar??o de Ipanema", "R$350", "#0000FF", 350, 10, 35, 175, 500, 1100, 1300, 1500);
square[38] = new Square("Receita Federal", "Pague R$100, Neymar", "#FFFFFF");
square[39] = new Square("Av. Delfim Moreira", "R$400", "#0000FF", 400, 10, 50, 200, 600, 1400, 1700, 2000);

var communityChestCards = [];
var chanceCards = [];

communityChestCards[0] = new Card("Sa??da livre da pris??o. Esta carta dever?? ser mantida at?? ser necess??ria ou vendida.", function(p) { p.communityChestJailCard = true; updateOwned();});
communityChestCards[1] = new Card("Voc?? ganhou o segundo lugar em um concurso de beleza. Receba R$10.", function() { addamount(10, 'Cofre');});
communityChestCards[2] = new Card("Da venda de a????es, voc?? recebe R$50.", function() { addamount(50, 'Cofre');});
communityChestCards[3] = new Card("Seguro de vida venceu. Receba R$100.", function() { addamount(100, 'Cofre');});
communityChestCards[4] = new Card("Restitui????o do imposto de renda. Receba R$20.", function() { addamount(20, 'Cofre');});
communityChestCards[5] = new Card("Seu fundo de f??rias venceu. Receba R$100.", function() { addamount(100, 'Cofre');});
communityChestCards[6] = new Card("Voc?? herdou R$100.", function() { addamount(100, 'Cofre');});
communityChestCards[7] = new Card("Receba R$25 de taxa de consultoria.", function() { addamount(25, 'Cofre');});
communityChestCards[8] = new Card("Pague taxas hospitalares de R$100.", function() { subtractamount(100, 'Cofre');});
communityChestCards[9] = new Card("Erro do banco a seu favor. Receba R$200.", function() { addamount(200, 'Cofre');});
communityChestCards[10] = new Card("Pague taxas escolares de R$50.", function() { subtractamount(50, 'Cofre');});
communityChestCards[11] = new Card("Honor??rios do m??dico. Pague R$50.", function() { subtractamount(50, 'Cofre');});
communityChestCards[12] = new Card("?? o teu anivers??rio. Receba R$10 de cada jogador.", function() { collectfromeachplayer(10, 'Cofre');});
communityChestCards[13] = new Card("Avance para o In??cio (Receba R$200).", function() { advance(0);});
communityChestCards[14] = new Card("Voc?? ?? avaliado para reparos na rua. Pague R$40 por casa e R$ 115 por hotel.", function() { streetrepairs(40, 115);});
communityChestCards[15] = new Card("V?? para a pris??o", "V?? diretamente para a pris??o. N??o passe pelo In??cio. N??o receba R$200", function() { gotojail();});


chanceCards[0] = new Card("Sa??da livre da pris??o. Esta carta dever?? ser mantida at?? ser necess??ria ou trocada.", function(p) { p.chanceJailCard=true; updateOwned();});
chanceCards[1] = new Card("Fa??a Reparos Gerais em Toda a Sua Propriedade. Para cada casa pague R$25. Para cada hotel R$100.", function() { streetrepairs(25, 100);});
chanceCards[2] = new Card("Multa por excesso de velocidade R$15.", function() { subtractamount(15, 'Sorte ou rev??s');});
chanceCards[3] = new Card("Voc?? foi eleito presidente do conselho. Pague a cada jogador R$50.", function() { payeachplayer(50, 'Sorte ou rev??s');});
chanceCards[4] = new Card("Volte tr??s casas.", function() { gobackthreespaces();});
chanceCards[5] = new Card("AVANCE PARA A UTILIDADE MAIS PR??XIMA. SE N??O TIVER DONO, voc?? pode compr??-lo do Banco. Se TIVER DONO, jogue dados e pague ao propriet??rio um total de dez vezes o valor lan??ado.", function() { advanceToNearestUtility();});
chanceCards[6] = new Card("O banco pagou dividendos. Receba R$50.", function() { addamount(50, 'Sorte ou rev??s');});
chanceCards[7] = new Card("AVANCE PARA O METR?? MAIS PR??XIMO. Se N??O TIVER DONO, voc?? pode compr??-lo do Banco. Se TIVER DONO, pague ao propriet??rio duas vezes o aluguel a que eles t??m direito.", function() { advanceToNearestRailroad();});
chanceCards[8] = new Card("Pague imposto de R$15.", function() { subtractamount(15, 'Sorte ou rev??s');});
chanceCards[9] = new Card("Fa??a uma viagem para Esta????o Largo do Machado. Se voc?? passar pelo In??cio receba R$200.", function() { advance(5);});
chanceCards[10] = new Card("AVANCE para Av. Delfim Moreira. Se voc?? passar pelo In??cio receba R$200.", function() { advance(39);});
chanceCards[11] = new Card("AVANCE para Av. Infante Dom Henrique. Se voc?? passar pelo In??cio receba R$200.", function() { advance(24);});
chanceCards[12] = new Card("Seu empr??stimo para constru????o venceu. Receba R$150.", function() { addamount(150, 'Sorte ou rev??s');});
chanceCards[13] = new Card("AVANCE PARA O METR?? MAIS PR??XIMO. Se N??O TIVER DONO, voc?? pode compr??-lo do Banco. Se TIVER DONO, pague ao propriet??rio duas vezes o aluguel a que eles t??m direito.", function() { advanceToNearestRailroad();});
chanceCards[14] = new Card("AVANCE para a Rua Uruguaiana.  Se voc?? passar pelo In??cio receba R$200.", function() { advance(11);});
chanceCards[15] = new Card("V?? para a pris??o", "V?? diretamente para a pris??o. N??o passe pelo In??cio. N??o receba R$200", function() { gotojail();});
