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

/* @SyliusShop/Layout/Footer/_content.html.twig */
class __TwigTemplate_015ca76437aeadc93316ec1578905bbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/_content.html.twig"));

        // line 1
        echo "<div class=\"ui center aligned inverted basic segment\">
    <p>&copy; ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_store"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
    <a target=\"_blank\" href=\"//facebook.com/SyliusEcommerce/\"><i class=\"big grey facebook icon\"></i></a>
    <a target=\"_blank\" href=\"//instagram.com/sylius.team/\"><i class=\"big grey instagram icon\"></i></a>
    <a target=\"_blank\" href=\"//twitter.com/sylius\"><i class=\"big grey twitter card icon\"></i></a>
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
        return "@SyliusShop/Layout/Footer/_content.html.twig";
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
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui center aligned inverted basic segment\">
    <p>&copy; {{ 'sylius.ui.your_store'|trans }}, {{ 'sylius.ui.powered_by'|trans }} <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
    <a target=\"_blank\" href=\"//facebook.com/SyliusEcommerce/\"><i class=\"big grey facebook icon\"></i></a>
    <a target=\"_blank\" href=\"//instagram.com/sylius.team/\"><i class=\"big grey instagram icon\"></i></a>
    <a target=\"_blank\" href=\"//twitter.com/sylius\"><i class=\"big grey twitter card icon\"></i></a>
</div>
", "@SyliusShop/Layout/Footer/_content.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/_content.html.twig");
    }
}