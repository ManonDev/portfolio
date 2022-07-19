const htmlP = document.getElementById("dev");
const txt = htmlP.dataset.label;
let i 	= 0 ;

function showLetters()
{
  let timeOut ;
  if(i < txt.length)
	{
	  htmlP.innerHTML += `<span>${txt[i]}</span>`;
	  timeOut = setTimeout(showLetters,080);
	  i++
	}
	else
	{
	  clearTimeout(timeOut);
	}
}
showLetters();




