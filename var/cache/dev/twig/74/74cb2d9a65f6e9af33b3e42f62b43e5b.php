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

/* @SyliusAdmin/Product/Show/_taxonomy.html.twig */
class __TwigTemplate_c78498c0a9fc1444fdae79c21ed13ee3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_taxonomy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_taxonomy.html.twig"));

        // line 1
        echo "<div id=\"taxonomy\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxonomy"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <table class=\"ui very basic celled table\">
            <tbody>
            ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "mainTaxon", [], "any", false, false, false, 6) != null)) {
            // line 7
            echo "                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.main_taxon"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "mainTaxon", [], "any", false, false, false, 9), "getFullName", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        // line 12
        echo "            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.product_taxons"), "html", null, true);
        echo "</strong></td>
                <td>
                    <ul class=\"ui bulleted list\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "productTaxons", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["productTaxon"]) {
            // line 17
            echo "                            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "getTaxon", [], "any", false, false, false, 17), "getFullName", [], "any", false, false, false, 17), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productTaxon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </ul>
                </td>
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
        return "@SyliusAdmin/Product/Show/_taxonomy.html.twig";
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
        return array (  90 => 19,  81 => 17,  77 => 16,  71 => 13,  68 => 12,  62 => 9,  58 => 8,  55 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"taxonomy\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.taxonomy'|trans }}</h4>
    <div class=\"ui attached segment\">
        <table class=\"ui very basic celled table\">
            <tbody>
            {% if product.mainTaxon != null %}
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.main_taxon'|trans }}</strong></td>
                    <td>{{ product.mainTaxon.getFullName }}</td>
                </tr>
            {% endif %}
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.product_taxons'|trans }}</strong></td>
                <td>
                    <ul class=\"ui bulleted list\">
                        {% for productTaxon in product.productTaxons %}
                            <li>{{ productTaxon.getTaxon.getFullName }}</li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_taxonomy.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_taxonomy.html.twig");
    }
}
