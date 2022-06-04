(function () {
    const loadJSON = (callback) => {
        const xObj = new XMLHttpRequest();
        xObj.overrideMimeType("application/json");
        xObj.open('GET', './harptos.json', true);
        xObj.onreadystatechange = () => {
            if (xObj.readyState === 4 && xObj.status === 200) {
                callback(xObj.responseText);
            }
        };
        xObj.send(null);
    }

    const init = () => {
        loadJSON((response) => {
            const json = JSON.parse(response);
            buildTable(json, '#harptos');
        });
    }

    /*const headers = (json, selector) => {
        let columns = [];
        let header = $('<tr>');

        for (let i in json) {
            let row = json[i];
            columns.push(row);
            header.append($('<th/>').html(i));
            for (let k in row) {

                if ($.inArray(k, columns) == -1) {
                }
            }
        }
        $(selector).append(header);
        return columns;
    }*/

    const buildTable = (json, selector) => {

        let monthDays = [];
        let months = [];
        let header = $('<tr/>');

        for (let i in json) {
            let row = json[i];
            monthDays.push(row);
            months.push(i);
        }
        for (let j = 0; j < 12; j++){
            console.log(months[j]);
            console.log(monthDays[j])
            header.append($('<th scope="col"/>').html(months[j]));


        }

        $(selector).append(header);
    }

    init();
})();