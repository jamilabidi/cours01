*, body {
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: 'Montserrat', sans-serif;
font-size: 10px;
}
section, nav{
max-width: 1440px;
margin: 0 auto;
padding: 10px;
}
section{
margin-top: 50px;
}
p{
line-height: 1.4em;
font-size: 1.6rem;
}
a, li, td, h3, h4, h5, h6, label, input, strong, span, option, textarea, select, legend{
font-size: 1.6rem !important;
}
th{
font-size: 1.8rem;
}

.liStyleReset{
list-style: none;
}
.aStyleReset, .aStyleReset:hover{
text-decoration: none;
color: black;
}


.modifH1{
font-size: clamp(2rem, 2rem + 1vw, 10rem);
}
h2{
font-size: 32px !important;
font-family: 'Nova Square', sans-serif !important;
}

.sectionHeroBanner{
display: flex;
flex-direction: row;
justify-content: space-between;
}
@media screen and (max-width: 600px){
.sectionHeroBanner{
flex-direction: column;
align-items: center;
}
.titleCV{
order: 2;
}
.photoCV{
order: 1;
}
}

@media screen and (max-width: 828px) {
.divHobbie{
margin-top: 20px;
}
}

.div50{
width: 50%;
display: flex;
justify-content: center;
align-items: center;
text-align: center;
}
.hrProfil{
width: 50%;
border: 2px solid #0050ff;
margin: 20px 0;
}

.animateFormation{
animation: 3s ease-in-out animationTranslation;
}

@keyframes animationTranslation{
from{
transform: translateY(-999px);
}
50%{
transform: translateY(0px)
rotate(90deg);
}
66%{
transform: translateY(-50px);
}
100%{
transform: translateY(0);
}
}


.flexDirectionColumn{
flex-direction: column;
}
.imgProfil{
border-radius: 50%;
width: 250px;
}

/* SECTION ABOUT */

.divTitleAbout{
margin: 10px;
}
.divTitleAbout > h3{
text-decoration: underline;
}
.divContentAbout{
background: #0050ff;
color: white;
padding: 20px;
border-radius: 20px;
}

/* SECTION COMPETENCE AND HOBBIES*/

.bgCompetenceAndHobbie{
background-color: #90aff1;
}

.sectionCompetenceAndHobbie{
display: flex;
flex-direction: row;
justify-content: space-around;
flex-wrap: wrap;
align-items: center;
padding: 70px 10px;
}
.divCompetence, .divHobbie{
min-width: 200px;
}

@media screen and (max-width: 600px){
.sectionCompetenceAndHobbie{
justify-content: start;
margin: 0 30px;
}
}

/* EXPERIENCE */

.divExperience{
margin: 10px;
}
.divExperience > h3{
text-decoration: underline;
}
table{
margin: 10px auto;
}
table,td, th{
border: 1px solid black;
}
td, th{
padding: 5px;
}
th{
background: black;
color: yellow;
}

/*Contact*/

form{
background-color: #0050ff;
max-width: 700px;
margin: 0 auto;
padding: 30px;
border-radius: 10px;
color: white;
}

.divForm{
display: flex;
flex-direction: column;
margin: 10px 0;
}
.divForm > input, .divForm > textarea{
border: none;
margin: 5px 0;
padding: 5px;
border-radius: 5px;
}

.divForm > fieldset > div {
padding: 10px;
}

.divFormBtn{
margin: 30px auto 10px;
text-align: center;
}

.divFormBtn > button{
padding: 8px 12px;
border: none;
border-radius: 8px;
font-size: 16px;
}
.divFormBtn > button:hover{
background-color: orange;
cursor: pointer;
}

select{
padding: 5px;
border-radius: 5px;
}

/* SECTION HOBBIE */

.divDescription{
margin: 30px 0 0;
padding: 20px;
}
.divDescription > h4{
margin: 0px 0 10px;
}

.divDescription > ol{
padding-left: 20px;
}

/* MODIFICATION COULEURS */
/* JAMIL */

#Jamil-hr{
border: 2px solid #2B9348;
}

#Jamil-about{
background-color: #2B9348;
}

#Jamil-comp{
background-color: rgba(43, 147, 72, 0.3);
}

/* CHARLY */

#Charly-hr{
border: 2px solid #a61411;
}

#Charly-about{
background-color: #a61411;
}

#Charly-comp{
background-color: rgba(166, 20, 17, 0.3);
}

/* HUGO */

#Hugo-hr{
border: 2px solid #1A2421;
}

#Hugo-about{
background-color: #1A2421;
}

#Hugo-comp{
background-color: rgba(26, 36, 33, 0.3);
}
