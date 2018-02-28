<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_2ec188f5cfb059ee9126b8140ce23f8fb7bc33480e7be0519be031f5744fcfa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e96c3a2d53b30643ee4dbd42e5c2217638539457351d162e41835f5120fc89df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96c3a2d53b30643ee4dbd42e5c2217638539457351d162e41835f5120fc89df->enter($__internal_e96c3a2d53b30643ee4dbd42e5c2217638539457351d162e41835f5120fc89df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ff925f1f4407fcf4a03ae1d790adabd937f5cdbe0a06c7ab933fcead3f5454a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff925f1f4407fcf4a03ae1d790adabd937f5cdbe0a06c7ab933fcead3f5454a2->enter($__internal_ff925f1f4407fcf4a03ae1d790adabd937f5cdbe0a06c7ab933fcead3f5454a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e96c3a2d53b30643ee4dbd42e5c2217638539457351d162e41835f5120fc89df->leave($__internal_e96c3a2d53b30643ee4dbd42e5c2217638539457351d162e41835f5120fc89df_prof);

        
        $__internal_ff925f1f4407fcf4a03ae1d790adabd937f5cdbe0a06c7ab933fcead3f5454a2->leave($__internal_ff925f1f4407fcf4a03ae1d790adabd937f5cdbe0a06c7ab933fcead3f5454a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
