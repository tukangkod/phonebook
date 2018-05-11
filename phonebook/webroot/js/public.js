$(document).ready(function () {
    $('#modalContact').on('show.bs.modal', (event) => {
        var button = $(event.relatedTarget);

        var modal = $(this);
        modal.find('.contact-modal-name').text(button.data('name'));
        modal.find('.contact-modal-email').text(button.data('email'));
        modal.find('.contact-modal-phones').html(buildPhone(button.data('main'), button.data('others')));
        modal.find('.contact-modal-address').text(button.data('address'));
    });
});

const buildPhone = (main, other) => {
    let html = "";
    console.log(main, other);
    [main, other].forEach((phone, id) => {
        phone.forEach((item) => {
            let data = JSON.parse(item);
            html += "<tr>" +
                "<td><i class=\"fa fa-ph\"></i></td>" +
                "<td>" + data.phone + "</td>" +
                "<td>" + getType(data.type) + "</td>" +
                "<td>" + isMainPhone(id) + "</td>" +
                "</tr>";
        })
    })
    return html;
}
const phoneType = {"home": "home", "work": "briefcase", "cellular": "mobile", "other": "phone"};
const getType = (type) => {
    let pt = phoneType[type];
    return (!!type) ? '<i class="fa fa-' + pt + '" alt="' + pt + '" title="' + pt + '"></i>' : "";
};
const isMainPhone = (i) => (i === 0) ? '<i class="fa fa-star" alt="main" title="main"></i>' : "";
