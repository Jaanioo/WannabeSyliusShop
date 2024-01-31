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

/* @SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig */
class __TwigTemplate_cd1f0feb10b082a9b206b7f589286853 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig"));

        // line 1
        echo "<div class=\"pre-footer\">
    <div>
        <div><i class=\"shipping fast icon\"></i></div>
        <strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.free_shipping_title"), "html", null, true);
        echo "</strong>
        <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.free_shipping_content"), "html", null, true);
        echo "</div>
    </div>
    <div>
        <div><i class=\"dollar sign icon\"></i></div>
        <strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.multiple_payments_title"), "html", null, true);
        echo "</strong>
        <div>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.multiple_payments_content"), "html", null, true);
        echo "</div>
    </div>
    <div>
        <div><i class=\"certificate icon\"></i></div>
        <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.guarantee_title"), "html", null, true);
        echo "</strong>
        <div>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.guarantee_content"), "html", null, true);
        echo "</div>
    </div>
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
        return "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig";
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
        return array (  74 => 15,  70 => 14,  63 => 10,  59 => 9,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pre-footer\">
    <div>
        <div><i class=\"shipping fast icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.free_shipping_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.free_shipping_content'|trans }}</div>
    </div>
    <div>
        <div><i class=\"dollar sign icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.multiple_payments_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.multiple_payments_content'|trans }}</div>
    </div>
    <div>
        <div><i class=\"certificate icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.guarantee_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.guarantee_content'|trans }}</div>
    </div>
</div>
", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/Grid/_pre_footer.html.twig");
    }
}
