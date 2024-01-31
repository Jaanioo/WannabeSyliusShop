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

/* @SyliusShop/Layout/Footer/Grid/_plus.html.twig */
class __TwigTemplate_60bdf80e827a415b323b5b4e7cd2e79e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_plus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_plus.html.twig"));

        // line 1
        echo "<div class=\"four wide column\">
    <a href=\"https://sylius.com/plus\" target=\"_blank\" style=\"display: inline-block; text-align: center;\">
        <h4 class=\"ui inverted header\" style=\"color: #808080;\">
            Need even more features?
            <div class=\"sub header\" style=\"padding: 5px 0;\">Check Sylius Plus out!</div>
        </h4>
        ";
        // line 7
        if ((isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "            <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/sylius-plus-banner.png", "shop"), "html", null, true);
            echo "\" alt=\"Sylius Plus\">
        ";
        } else {
            // line 10
            echo "            <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/sylius-plus-banner.png"), "html", null, true);
            echo "\" alt=\"Sylius Plus\">
        ";
        }
        // line 12
        echo "    </a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Layout/Footer/Grid/_plus.html.twig";
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
        return array (  65 => 12,  59 => 10,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"four wide column\">
    <a href=\"https://sylius.com/plus\" target=\"_blank\" style=\"display: inline-block; text-align: center;\">
        <h4 class=\"ui inverted header\" style=\"color: #808080;\">
            Need even more features?
            <div class=\"sub header\" style=\"padding: 5px 0;\">Check Sylius Plus out!</div>
        </h4>
        {% if use_webpack %}
            <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"{{ asset('build/shop/images/sylius-plus-banner.png', 'shop') }}\" alt=\"Sylius Plus\">
        {% else %}
            <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"{{ asset('assets/shop/img/sylius-plus-banner.png') }}\" alt=\"Sylius Plus\">
        {% endif %}
    </a>
</div>
", "@SyliusShop/Layout/Footer/Grid/_plus.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/Grid/_plus.html.twig");
    }
}
