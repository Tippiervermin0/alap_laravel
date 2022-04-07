$(function () {


const token = $('meta[name="csrf-token"]').attr("content");
    const myAjax = new MyAjax(token);
    const urlap = new UrlapKezeles();
myAjax.getAjax("/tevekenysegek", urlap.optionTevekenysegFeltolt)

});

class UrlapKezeles {
    

    constructor(){
        const osztalyokTmb = [
            "Válassz osztályt!",
            "nSZF1A",
            "nSZF1B",
            "nSZF2A",
            "nIRU1A",
            "nIRU1B",
            "nIRU2A",
        ];

        this.osztalyokSelect = $("#osztalyok");
        this.tevekenysegekSelect = $("#tevekenysegek");
        this.optionOsztalyokFeltolt(osztalyokTmb);
        $("#kuld").on("click", () => {
            const adat = {
                osztalyokID: $("#osztalyok").val(),
                tevekenysegID: $("#tevekenysegek").val(),
            };
            console.log(adat);
            this.kattintasTrigger(adat);
        })
    }
    kattintasTrigger(adat) {
        let event = new CustomEvent("kuldKattintas", {
            detail: adat,
        });
        window.dispatchEvent(event);
    }

    optionTevekenysegFeltolt(tomb) {
        console.log(tomb);
        tomb.forEach((element) => {
            $("#tevekenysegek").append(
                "<option value = "+element.tevekenyseg_id+">"+element.tevekenyseg_nev+"</option>"

            );
        });
    }

    optionOsztalyokFeltolt(tomb){
        console.log(tomb);
        tomb.forEach((element, index) => {
            this.osztalyokSelect.append(
                `<option value = '${index}'>${element}</option>`
            );
        });

    }
}

class Bejegyzes{
    
}
