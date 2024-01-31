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

/* @SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig */
class __TwigTemplate_9c5e59cbb45b281665300bf81027b6a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig"));

        // line 1
        echo "<table id=\"sylius-product-attributes\" class=\"ui definition table\" ";
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-attributes");
        echo ">
    <tbody>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "getAttributesByLocale", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "defaultLocale", [], "any", false, false, false, 3), (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new RuntimeError('Variable "sylius_base_locale" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "attribute.position"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 4
            echo "        <tr>
            <td class=\"sylius-product-attribute-name\" ";
            // line 5
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-attribute-name", twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 5));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</td>
            <td class=\"sylius-product-attribute-value\" ";
            // line 6
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-attribute-value", twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 6));
            echo ">
                ";
            // line 7
            $this->loadTemplate([(("@SyliusShop/Product/Show/Types/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
$context["attribute"], "attribute", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8)) . ".html.twig"), (("@SyliusAttribute/Types/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 9
$context["attribute"], "attribute", [], "any", false, false, false, 9), "type", [], "any", false, false, false, 9)) . ".html.twig"), "@SyliusShop/Product/Show/Types/default.html.twig"], "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig", 7)->display(twig_array_merge($context, ["attribute" =>             // line 12
$context["attribute"], "locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "locale", [], "any", false, false, false, 13), "fallbackLocale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "defaultLocale", [], "any", false, false, false, 14)]));
            // line 16
            echo "            </td>
        </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig";
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
        return array (  102 => 19,  86 => 16,  84 => 14,  83 => 13,  82 => 12,  81 => 9,  80 => 8,  79 => 7,  75 => 6,  69 => 5,  66 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"sylius-product-attributes\" class=\"ui definition table\" {{ sylius_test_html_attribute('product-attributes') }}>
    <tbody>
    {% for attribute in product.getAttributesByLocale(configuration.request.locale, configuration.request.defaultLocale, sylius_base_locale)|sort_by('attribute.position') %}
        <tr>
            <td class=\"sylius-product-attribute-name\" {{ sylius_test_html_attribute('product-attribute-name', attribute.name) }}>{{ attribute.name }}</td>
            <td class=\"sylius-product-attribute-value\" {{ sylius_test_html_attribute('product-attribute-value', attribute.name) }}>
                {% include [
                    '@SyliusShop/Product/Show/Types/'~attribute.attribute.type~'.html.twig',
                    '@SyliusAttribute/Types/'~attribute.attribute.type~'.html.twig',
                    '@SyliusShop/Product/Show/Types/default.html.twig'
                ] with {
                    'attribute': attribute,
                    'locale': configuration.request.locale,
                    'fallbackLocale': configuration.request.defaultLocale
                } %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/Attributes/_list.html.twig");
    }
}