drop table if exists post;

create table post (
    id integer not null primary key autoincrement,
    author varchar(80) not null,
    title varchar(80) not null,
    message text default ''
); 

insert into post values (null, "Rembrandt van Rijn",  "My first post", 
"Yes I now have an account on Art Society. Finally giving in to technology" );
insert into post values (null, "Rembrandt van Rijn", "The beauty in Chiaroscuro", "Ladies and gentlemen the dramatic effects of Chiaroscuro.");
insert into post values (null, "Rembrandt van Rijn",  "Art Criticism", "My two cents on the art world today and a criticism on Impressionism");
insert into post values (null, "Rembrandt van Rijn", "My Creative Influences", "da Vinci, Michaelangelo and Buonarotti are my idols. lol");
insert into post values (null, "Rembrandt van Rijn", "How to Paint Tutorial", "Today, I will give a few tips on classical painting");

drop table if exists comment;

create table comment (
    id integer not null primary key autoincrement,
    postid integer not null references post(id),
    author varchar(80) not null,
    message text default ''
); 

insert into comment values (null, "1", "Van Gogh",  "Welcome to Art Society");
insert into comment values (null, "1", "Cezanne", "That's so cool");
insert into comment values (null, "2", "Gaugin",  "I love your work");
insert into comment values (null, "2", "Watson", "Love the colors");
insert into comment values (null, "3", "Seurat", "Thanks for the crtitque, Rembrandt");
insert into comment values (null, "4", "Hokusai", "We have the same influences");
insert into comment values (null, "5", "Delacroix", "Thanks for sharing your skill");