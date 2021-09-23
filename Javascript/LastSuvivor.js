const lastsurvivor=(letters,coords)=>{
    const a=letters.split('')
    while(coords.length>0){
        a.splice(coords.shift(),1)
    }
    return a[0];
}