import $ from 'jquery';

// show password button toogle
$(function () {
    $('.toggle-password, .toggle-confirm-password').on('click', function (event) {
        event.preventDefault();

        const $trigger = $(this);
        const targetSelector = $trigger.data('target');
        const $passwordInput = targetSelector ? $(targetSelector) : $trigger.closest('.input-group').find('input').first();
        const isHidden = $passwordInput.attr('type') === 'password';

        $passwordInput.attr('type', isHidden ? 'text' : 'password');
        $trigger.attr('title', isHidden ? 'Hide password' : 'Show password')
            .attr('aria-label', isHidden ? 'Hide password' : 'Show password');
    });
});
