<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/batch_job_error.proto

namespace Google\Ads\GoogleAds\V11\Errors\BatchJobErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible request errors.
 *
 * Protobuf type <code>google.ads.googleads.v11.errors.BatchJobErrorEnum.BatchJobError</code>
 */
class BatchJobError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The batch job cannot add more operations or run after it has started
     * running.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING = 2;</code>
     */
    const CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING = 2;
    /**
     * The operations for an AddBatchJobOperations request were empty.
     *
     * Generated from protobuf enum <code>EMPTY_OPERATIONS = 3;</code>
     */
    const EMPTY_OPERATIONS = 3;
    /**
     * The sequence token for an AddBatchJobOperations request was invalid.
     *
     * Generated from protobuf enum <code>INVALID_SEQUENCE_TOKEN = 4;</code>
     */
    const INVALID_SEQUENCE_TOKEN = 4;
    /**
     * Batch job results can only be retrieved once the job is finished.
     *
     * Generated from protobuf enum <code>RESULTS_NOT_READY = 5;</code>
     */
    const RESULTS_NOT_READY = 5;
    /**
     * The page size for ListBatchJobResults was invalid.
     *
     * Generated from protobuf enum <code>INVALID_PAGE_SIZE = 6;</code>
     */
    const INVALID_PAGE_SIZE = 6;
    /**
     * The batch job cannot be removed because it has started running.
     *
     * Generated from protobuf enum <code>CAN_ONLY_REMOVE_PENDING_JOB = 7;</code>
     */
    const CAN_ONLY_REMOVE_PENDING_JOB = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING => 'CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING',
        self::EMPTY_OPERATIONS => 'EMPTY_OPERATIONS',
        self::INVALID_SEQUENCE_TOKEN => 'INVALID_SEQUENCE_TOKEN',
        self::RESULTS_NOT_READY => 'RESULTS_NOT_READY',
        self::INVALID_PAGE_SIZE => 'INVALID_PAGE_SIZE',
        self::CAN_ONLY_REMOVE_PENDING_JOB => 'CAN_ONLY_REMOVE_PENDING_JOB',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchJobError::class, \Google\Ads\GoogleAds\V11\Errors\BatchJobErrorEnum_BatchJobError::class);

