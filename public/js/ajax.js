class MyAjax {
    constructor(token){
        this.token = token;
    }

    getAjax(apivegpont, myCallback) {
        const tomb = [];
        $.ajax({         
            url: apivegpont,
            type: "GET",
            success: function (result) {
                console.log(result);
                result.forEach((element) => {
                    tomb.push(element);
                });
                myCallback(tomb);
            },
            error: function (result) {
                console.log(result);
            },
        });
    }

    postAjax(apivegpont, ujtermek) {
        ujtermek._token = this.token;
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token},
            url: apivegpont,
            type: "POST",
            data: ujtermek,
            success: function (result) {},
            error: function (result) {
                console.log(result);
            },
        });
    }
}