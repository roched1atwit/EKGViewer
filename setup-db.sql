DROP TABLE IF EXISTS Quiz_Question;
DROP TABLE IF EXISTS Quiz_Answer;
DROP TABLE IF EXISTS Quiz_Category;

CREATE TABLE Quiz_Category (
    categoryID  int             not null,
    category    varchar(128)    not null,
    constraint Quiz_Category_PK primary key (categoryID)
);

CREATE TABLE Quiz_Answer (
    answerID    int             not null,
    category    int             not null,
    answer      varchar(128)    not null,
    constraint Quiz_Answer_PK 
        primary key (answerID),
    constraint Quiz_Answer_FK1 
        foreign key (category)
        references Quiz_Category(categoryID)
);

CREATE TABLE Quiz_Question (
    questionID      int             not null,
    category        int             not null,
    question        varchar(128)    not null,
    correct_answer  int             not null,
    constraint Quiz_Question_PK 
        primary key (questionID),
    constraint Quiz_Question_FK1 
        foreign key (category)
        references Quiz_Category(categoryID),
    constraint Quiz_Question_FK2
        foreign key (correct_answer)
        references Quiz_Answer(answerID)
);

insert into Quiz_Category values (0, "history");
insert into Quiz_Category values (1, "definition");
insert into Quiz_Category values (2, "how-to-place");
insert into Quiz_Category values (3, "how-to-interpret");


insert into Quiz_Answer values (0,  0, "history1");
insert into Quiz_Answer values (1,  0, "history2");
insert into Quiz_Answer values (2,  0, "history3");
insert into Quiz_Answer values (3,  0, "history4");
insert into Quiz_Answer values (4,  0, "history5");
insert into Quiz_Answer values (5,  0, "history6");

insert into Quiz_Answer values (6,  1, "definition1");
insert into Quiz_Answer values (7,  1, "definition2");
insert into Quiz_Answer values (8,  1, "definition3");
insert into Quiz_Answer values (9,  1, "definition4");
insert into Quiz_Answer values (10, 1, "definition5");
insert into Quiz_Answer values (11, 1, "definition6");

insert into Quiz_Answer values (12, 2, "place1");
insert into Quiz_Answer values (13, 2, "place2");
insert into Quiz_Answer values (14, 2, "place3");
insert into Quiz_Answer values (15, 2, "place4");
insert into Quiz_Answer values (16, 2, "place5");
insert into Quiz_Answer values (17, 2, "place6");

insert into Quiz_Answer values (18, 3, "normal-sinus-rhythm");
insert into Quiz_Answer values (19, 3, "sinus-bradycardia");
insert into Quiz_Answer values (20, 3, "premature-atrial-complexes");
insert into Quiz_Answer values (21, 3, "atrial-flutter");
insert into Quiz_Answer values (22, 3, "idioventricular-rhythm");
insert into Quiz_Answer values (23, 3, "asystole");


insert into Quiz_Question values (0,  0, "historyQ1", 0 );
insert into Quiz_Question values (1,  0, "historyQ2", 1 );
insert into Quiz_Question values (2,  0, "historyQ3", 2 );
insert into Quiz_Question values (3,  0, "historyQ4", 3 );
insert into Quiz_Question values (4,  0, "historyQ5", 4 );
insert into Quiz_Question values (5,  0, "historyQ6", 5 );

insert into Quiz_Question values (6,  1, "definitionQ1", 6 );
insert into Quiz_Question values (7,  1, "definitionQ2", 7 );
insert into Quiz_Question values (8,  1, "definitionQ3", 8 );
insert into Quiz_Question values (9,  1, "definitionQ4", 9 );
insert into Quiz_Question values (10, 1, "definitionQ5", 10);
insert into Quiz_Question values (11, 1, "definitionQ6", 11);

insert into Quiz_Question values (12, 2, "placeQ1", 12);
insert into Quiz_Question values (13, 2, "placeQ2", 13);
insert into Quiz_Question values (14, 2, "placeQ3", 14);
insert into Quiz_Question values (15, 2, "placeQ4", 15);
insert into Quiz_Question values (16, 2, "placeQ5", 16);
insert into Quiz_Question values (17, 2, "placeQ6", 17);

insert into Quiz_Question values (18, 3, "Which is an example of Normal Sinus Rhythm?",         18);
insert into Quiz_Question values (19, 3, "Which is an example of Sinus Bradycardia?",           19);
insert into Quiz_Question values (20, 3, "Which is an example of Premature Atrial Complexes?",  20);
insert into Quiz_Question values (21, 3, "Which is an example of Atrial Flutter?",              21);
insert into Quiz_Question values (22, 3, "Which is an example of Idioventricular Rhythm?",      22);
insert into Quiz_Question values (23, 3, "Which is an example of Asystole?",                    23);
