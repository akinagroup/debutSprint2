<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3a8bb2313716fe472168e44970891d84ee278a308d1bf1ec49e0f954d8c20943 extends Twig_Template
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
        $__internal_5546da328e01c1df6e12657825618dc54b61f9e6e9ea18e299ec97e779032abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5546da328e01c1df6e12657825618dc54b61f9e6e9ea18e299ec97e779032abc->enter($__internal_5546da328e01c1df6e12657825618dc54b61f9e6e9ea18e299ec97e779032abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_de774f9123a70e2fec663f9561f2dff90f68282eda9221908bebd310513646a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de774f9123a70e2fec663f9561f2dff90f68282eda9221908bebd310513646a0->enter($__internal_de774f9123a70e2fec663f9561f2dff90f68282eda9221908bebd310513646a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5546da328e01c1df6e12657825618dc54b61f9e6e9ea18e299ec97e779032abc->leave($__internal_5546da328e01c1df6e12657825618dc54b61f9e6e9ea18e299ec97e779032abc_prof);

        
        $__internal_de774f9123a70e2fec663f9561f2dff90f68282eda9221908bebd310513646a0->leave($__internal_de774f9123a70e2fec663f9561f2dff90f68282eda9221908bebd310513646a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
