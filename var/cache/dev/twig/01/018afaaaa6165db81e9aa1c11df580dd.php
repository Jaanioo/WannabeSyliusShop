<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SyliusPayPalPlugin/javascripts.html.twig */
class __TwigTemplate_af6b80ddbd45a7851a2d78d9fbfc4b2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/javascripts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/javascripts.html.twig"));

        // line 1
        echo "<script type=\"application/javascript\">
    const confirmationText = document.querySelector('#confirmation-modal > div.content');;
    const defaultText = confirmationText.innerHTML;

    document.querySelector('#confirmation-button').addEventListener('click', evt => {
        window.location.href = evt.currentTarget.getAttribute('href');
    })

    document.querySelectorAll('[data-confirm-pay-pal-consent]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            evt.preventDefault();

            const actionButton = evt.currentTarget;
            document.querySelector('#confirmation-button').setAttribute('href', actionButton.getAttribute('href'));

            confirmationText.innerHTML = '";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.share_data_consent_confirmation"), "html", null, true);
        echo "';
            \$('#confirmation-modal')
                .modal({
                    onHidden: function() {
                        confirmationText.innerHTML = defaultText;
                    }
                })
                .modal('show')
            ;
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusPayPalPlugin/javascripts.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"application/javascript\">
    const confirmationText = document.querySelector('#confirmation-modal > div.content');;
    const defaultText = confirmationText.innerHTML;

    document.querySelector('#confirmation-button').addEventListener('click', evt => {
        window.location.href = evt.currentTarget.getAttribute('href');
    })

    document.querySelectorAll('[data-confirm-pay-pal-consent]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            evt.preventDefault();

            const actionButton = evt.currentTarget;
            document.querySelector('#confirmation-button').setAttribute('href', actionButton.getAttribute('href'));

            confirmationText.innerHTML = '{{ 'sylius.pay_pal.share_data_consent_confirmation'|trans }}';
            \$('#confirmation-modal')
                .modal({
                    onHidden: function() {
                        confirmationText.innerHTML = defaultText;
                    }
                })
                .modal('show')
            ;
        });
    });
</script>
", "@SyliusPayPalPlugin/javascripts.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/paypal-plugin/src/Resources/views/javascripts.html.twig");
    }
}
