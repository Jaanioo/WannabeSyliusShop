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

/* @SyliusAdmin/Product/Show/_shipping.html.twig */
class __TwigTemplate_459225f85ff9362ee408ab8afc173543 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_shipping.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_shipping.html.twig"));

        // line 1
        echo "<div id=\"shipping\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_category"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 8
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "variants", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8), "shippingCategory", [], "any", false, false, false, 8))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "variants", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8), "shippingCategory", [], "any", false, false, false, 8), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.width"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 12
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "variants", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), "width", [], "any", false, false, false, 12))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "variants", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), "width", [], "any", false, false, false, 12), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.height"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 16
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "variants", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), "height", [], "any", false, false, false, 16))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "variants", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), "height", [], "any", false, false, false, 16), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.depth"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 20
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "variants", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), "depth", [], "any", false, false, false, 20))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "variants", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), "depth", [], "any", false, false, false, 20), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.weight"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 24
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "variants", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "variants", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            </tbody>
        </table>
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
        return "@SyliusAdmin/Product/Show/_shipping.html.twig";
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
        return array (  98 => 24,  94 => 23,  88 => 20,  84 => 19,  78 => 16,  74 => 15,  68 => 12,  64 => 11,  58 => 8,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"shipping\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.shipping'|trans }}</h4>
    <div class=\"ui attached segment\">
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.shipping_category'|trans }}</strong></td>
                <td>{{ product.variants.first.shippingCategory is not empty ? product.variants.first.shippingCategory : '-' }}</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.width'|trans }}</strong></td>
                <td>{{ product.variants.first.width is not empty ? product.variants.first.width : '-' }}</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.height'|trans }}</strong></td>
                <td>{{ product.variants.first.height is not empty ? product.variants.first.height : '-' }}</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.depth'|trans }}</strong></td>
                <td>{{ product.variants.first.depth is not empty ? product.variants.first.depth : '-' }}</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.weight'|trans }}</strong></td>
                <td>{{ product.variants.first.weight is not empty ? product.variants.first.weight : '-' }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_shipping.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_shipping.html.twig");
    }
}
