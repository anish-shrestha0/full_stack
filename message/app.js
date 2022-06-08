let form=document.querySelector(".msg-form");

document.querySelector(".msg-send-btn").addEventListener("click",(e)=>{
    let message=form.elements.msg.value;
    e.preventDefault();
    let p=document.createElement("p");
    p.append(message);
    document.querySelector(".outgoing-chat-msg").insertAdjacentElement("beforeend",p);
    let date=new Date();
    let span=document.createElement("span");
    const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    span.classList.add("datetime");
    span.append(` ${date.getHours()}:${date.getMinutes()},${month[date.getMonth()]} ${date.getDate()},${date.getFullYear()}`);
    document.querySelector(".outgoing-chat-msg").insertAdjacentElement("beforeend",span);
    let img =document.createElement("img");
    img.classList.add("img2");
    img.setAttribute("src","https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg")
    document.querySelector(".outgoing-chat-img").append(img);
    setTimeout(()=>{
        document.querySelector(".response").style.display="block";
    },2000)
    form.reset();
     
    
    
})

