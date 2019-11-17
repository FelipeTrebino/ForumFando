CREATE DATABASE `site` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use site;
create table usuario(
id int auto_increment primary key not null unique,
nome varchar(255),
email varchar(255),
senha varchar(256),
interesses varchar(256),
sexo char (1),
dataNascimento date,
nivel char(1)
);

create table topico(
id int auto_increment primary key not null unique,
titulo varchar(255),
texto varchar(5000),
id_autor int not null,
categoria varchar(255),
fixo char(1),
foreign key(id_autor) 
references usuario(id)
);

insert into Usuario values
(1,"Admin","admin@email",sha2("123",512),"Esporte1;Esporte2;Esporte3;Games1;Games2;Games3;Entreterimento1;Entreterimento2;Entreterimento3;Moda1;Moda2;Noticias1;Noticias2;Tecnologia1;Tecnologia2;Tecnologia3
","M","2001-05-15","1"),
(2,"User","user@email",sha2("123",512),"Esporte1;Esporte2","M","2001-05-15","0");
insert into topico values
(1,"Primeiro tópico do fórum","Esse é o primeiro tópico, fixado em todas as abas",1,"","1"),
(2,"Clube do Basquete !","História\n

Em Dezembro de 1891, o professor de educação física canadense James Naismith, do Springfield College (então denominada Associação Cristã de Moços), em Massachusetts, Estados Unidos, recebeu uma tarefa de seu diretor: criar um esporte que os alunos pudessem praticar em um local fechado, pois o inverno costumava ser muito rigoroso, o que impedia a prática do Basebol e do Futebol Americano.
James Naismith logo descartou um jogo que utilizasse os pés ou com muito contato físico, pois poderiam se tornar muito violentos devido às características de um ginásio, local fechado e com piso de madeira.
Logo escreveu as treze regras básicas do jogo e pendurou um cesto de pêssegos a uma altura que julgou adequada: dez pés, equivalente a 3,05 metros, altura que se mantém até hoje; já a quadra possuía, aproximadamente, metade do tamanho da atual.

\nO Primeiro Jogo

\nO primeiro jogo de Basquetebol foi disputado em 20 de Janeiro de 1892, com nove jogadores em cada equipe e utilizando-se uma bola de futebol, sendo visto apenas por funcionários da ACM (Associação Cristã de Moços). Cerca de duzentas pessoas viram os alunos vencerem os professores por 5 a 1.

\nO basquete feminino iniciou em 1892 quando a professora de educação física do Smith College, Senda Berenson, adaptou as regras criadas por James Naismith. A primeira partida aconteceu em 4 de Abril de 1896. A Universidade de Stanford venceu a Universidade da Califórnia.

\nHistória do Basquete no Brasil

\nA prática do basquete no Brasil começou quando o norte-americano Augusto Shaw introduziu o esporte na Associação Atlética Mackenzie de São Paulo, em 1896.

\nNo Rio de Janeiro, teriam acontecido, em 1912, os primeiros jogos de basquete, na rua da Quitanda, com o América Football Club tendo sido o primeiro clube carioca a introduzir o esporte nesta cidade, incentivado por Henry J. Sims, diretor da Associação Cristã de Moços.

\nFonte: Wikipédia

\nSites:
\nwww.fiba.com
\nwww.cbb.com.br",2,"Esporte1","0"),
(3,"Fone 7.1 para jogos FPS é melhor que um 2.0?","Pessoal, eu tenho um fone Audio technica ATH-M40x e uso pra jogar e acho bom, mas nunca joguei com fones gamer de verdade 7.1 como o logitech g633.
Preciso comprar um mic pra por no meu fone, achei um mic bom custa uns 50 dólares, então pensei em já pegar um fone gamer.

Pra quem joga FPS, da muita diferença? Vale a pena investir num g633 ou outro do mesmo preço ($70 dólares refurb).

Alguém que já jogou com os fones Audio technica também já teve experiencia com um fone gamer 7.1? É melhor?",2,"Games1","0"),
(4,"QUAIS CÂMERAS DE AÇÃO POSSUEM MELHOR CAPACIDADE DE CAPTURAR ÁUDIO E VÍDEO NITIDAMENTE?","Boa tarde!

Sou policial militar e vez ou outra, quando a licitude da minha conduta é apurada, o processo acaba sendo mais longo do que deveria. Por isso estou procurando uma câmera de ação ideal para evitar esse tipo de problema, que deve ter capacidade de capturar áudio e vídeo nitidamente. Estou disposto a gastar por volta de R$2.000,00.

Andei pesquisando a respeito da go pro hero 7, e vi que ela tem um recurso que mitiga as tremedeiras da filmagem, mas não achei nada a respeito da qualidade de áudio.

Por favor me ajudem com essa decisão, pois entendo muito pouco sobre esse tipo de aparelho.",1,"Tecnologia2","0");
