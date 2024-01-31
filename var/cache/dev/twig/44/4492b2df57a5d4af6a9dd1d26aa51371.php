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

/* @SyliusAdmin/Product/Show/_pricing.html.twig */
class __TwigTemplate_6103cd9ae872d08c773962d3cb0e956c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_pricing.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Product/Show/_pricing.html.twig", 1)->unwrap();
        // line 2
        echo "<div id=\"pricing\">
    <h4 class=\"ui top attached large header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <table id=\"pricing\" class=\"ui very basic celled table\">
            <thead>
                <tr>
                    <th><strong class=\"gray text\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_price"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discounted_by"), "html", null, true);
        echo "</strong></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "variants", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15), "channelPricings", [], "any", false, false, false, 15));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["channelPricing"]) {
            // line 16
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "channels", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16) != false)) {
                // line 17
                echo "                    <tr>
                        <td class=\"five wide gray text\">
                            <strong>";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelNameExtension']->getChannelNameByCode(twig_get_attribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 19)), "html", null, true);
                echo "</strong>
                        </td>
                        <td>";
                // line 21
                echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "price", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "channels", [], "any", false, false, false, 21), "first", [], "any", false, false, false, 21), "baseCurrency", [], "any", false, false, false, 21)], 21, $context, $this->getSourceContext());
                echo "</td>
                        ";
                // line 22
                if ((twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 22) != null)) {
                    // line 23
                    echo "                            <td>";
                    echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "channels", [], "any", false, false, false, 23), "first", [], "any", false, false, false, 23), "baseCurrency", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
                    echo "</td>
                        ";
                } else {
                    // line 25
                    echo "                            <td>-</td>
                        ";
                }
                // line 27
                echo "                        ";
                $this->loadTemplate("@SyliusAdmin/Product/Show/_appliedPromotions.html.twig", "@SyliusAdmin/Product/Show/_pricing.html.twig", 27)->display($context);
                // line 28
                echo "                    </tr>
                ";
            }
            // line 30
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channelPricing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tbody>
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
        return "@SyliusAdmin/Product/Show/_pricing.html.twig";
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
        return array (  141 => 31,  127 => 30,  123 => 28,  120 => 27,  116 => 25,  110 => 23,  108 => 22,  104 => 21,  99 => 19,  95 => 17,  92 => 16,  75 => 15,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}
<div id=\"pricing\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.pricing'|trans }}</h4>
    <div class=\"ui attached segment\">
        <table id=\"pricing\" class=\"ui very basic celled table\">
            <thead>
                <tr>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.channels'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.price'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.original_price'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.discounted_by'|trans }}</strong></th>
                </tr>
            </thead>
            <tbody>
            {% for channelPricing in product.variants.first.channelPricings %}
                {% if product.channels.first != false %}
                    <tr>
                        <td class=\"five wide gray text\">
                            <strong>{{ channelPricing.channelCode|sylius_channel_name }}</strong>
                        </td>
                        <td>{{ money.format(channelPricing.price, product.channels.first.baseCurrency) }}</td>
                        {% if channelPricing.originalPrice != null %}
                            <td>{{ money.format(channelPricing.originalPrice, product.channels.first.baseCurrency) }}</td>
                        {% else %}
                            <td>-</td>
                        {% endif %}
                        {% include '@SyliusAdmin/Product/Show/_appliedPromotions.html.twig' %}
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_pricing.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_pricing.html.twig");
    }
}
