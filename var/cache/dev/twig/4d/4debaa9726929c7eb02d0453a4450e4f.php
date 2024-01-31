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

/* @SyliusShop/Homepage/_newsletter.html.twig */
class __TwigTemplate_e09b9e5e494ea4fe7da7b9c8c0acefb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/_newsletter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/_newsletter.html.twig"));

        // line 1
        echo "<div class=\"ui very padded secondary segment newsletter\">
    <div class=\"ui bottom aligned grid\">
        <div class=\"doubling two column row\">
            <div class=\"column\">
                <h2 class=\"ui huge header\">
                    ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.newsletter"), "html", null, true);
        echo "
                </h2>
                <p>
                    ";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.newsletter_description");
        echo "
                </p>
            </div>
            <div class=\"column\">
                <form class=\"ui form\">
                    <div class=\"newsletter-input\">
                        <input type=\"text\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.email"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"newsletter-button\">
                        <button class=\"ui button\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.subscribe"), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Homepage/_newsletter.html.twig";
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
        return array (  71 => 18,  65 => 15,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui very padded secondary segment newsletter\">
    <div class=\"ui bottom aligned grid\">
        <div class=\"doubling two column row\">
            <div class=\"column\">
                <h2 class=\"ui huge header\">
                    {{ 'sylius.homepage.newsletter'|trans }}
                </h2>
                <p>
                    {{ 'sylius.homepage.newsletter_description'|trans|raw }}
                </p>
            </div>
            <div class=\"column\">
                <form class=\"ui form\">
                    <div class=\"newsletter-input\">
                        <input type=\"text\" placeholder=\"{{ 'sylius.ui.email'|trans }}\">
                    </div>
                    <div class=\"newsletter-button\">
                        <button class=\"ui button\">{{ 'sylius.homepage.subscribe'|trans }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"ui hidden divider\"></div>
", "@SyliusShop/Homepage/_newsletter.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Homepage/_newsletter.html.twig");
    }
}
